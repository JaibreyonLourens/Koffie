using System;
using MySql.Data.MySqlClient;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Barroc_Intense
{
    public partial class Facturen : Form
    {
        public Facturen()
        {
            InitializeComponent();
            MySqlConnection connection = new MySqlConnection("Server=127.0.0.1;Database=testbarroc;Uid=root;Pwd=;");
            connection.Open();

            try
            {

                //    DataSet ds = new DataSet();
                //    string Users_query = "SELECT invoices.id,users.name,supplies.name, antaal, total, betaald_op FROM invoices INNER JOIN users ON users.id=invoices.user_id INNER JOIN supplies ON supplies.id=invoices.supply_id";
                //    MySqlDataAdapter users_da = new MySqlDataAdapter(Users_query, connection);

                //    users_da.Fill(ds, "invoices");


                //    dataGridView1.Rows.Add("invoices");
                //}

                //MySqlCommand allinvoices = new MySqlCommand("SELECT invoices.id,leases.id, users.name ,supplies.name, lease_types.type, leases.monthly_costs, invoices.betaald_op FROM leases " +
                //    "INNER JOIN users ON users.id=leases.customer_id " +
                //    "INNER JOIN lease_types ON lease_types.id = leases.lease_type_id " +
                //    "INNER JOIN invoices ON invoices.lease_id=leases.id " +
                //    "INNER JOIN lease_rules ON leases.id = lease_rules.lease_id " +
                //    "INNER JOIN supplies ON supplies.id= lease_rules.supply_id", connection);
                //int antaal = Convert.ToInt32(reader.GetValue(3));


                MySqlCommand allinvoices = new MySqlCommand("SELECT invoices.id,leases.id, users.name, lease_types.type, leases.monthly_costs, invoices.betaald_op" +
                    " FROM invoices " +
                    "INNER JOIN leases ON leases.id=invoices.lease_id " +
                    "INNER JOIN lease_types ON leases.lease_type_id = lease_types.id " +
                    "INNER JOIN users ON leases.customer_id=users.id", connection);
                using (MySqlDataReader reader = allinvoices.ExecuteReader())
                {
                    Console.WriteLine(reader.FieldCount);
                    if (reader.HasRows)
                    {
                        while (reader.Read())
                        {
                            int id = Convert.ToInt32(reader.GetValue(0));
                            int les_id = Convert.ToInt32(reader.GetValue(1));
                            string userName = (string)reader.GetValue(2);
                            string lease_types = (string)reader.GetValue(3);
                            Double Price = Convert.ToDouble(reader.GetValue(4));

                            string betaald_op;
                            if (!reader.IsDBNull(5))
                            {
                                betaald_op = "betaald";
                            }
                            else
                            {
                                betaald_op = " nog niet betaald";
                            }

                            dataGridView1.Rows.Add(id, userName,  lease_types, Price, betaald_op);


                        }
                    }

                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void betalenButton_Click(object sender, EventArgs e)
        {

            try
            {

                DateTime StartDate = dateTimePicker.Value;
                DateTime StartTimeCombined = new DateTime(StartDate.Year, StartDate.Month, StartDate.Day);

                int id = (int) dataGridView1.SelectedRows[0].Cells[0].Value;

                string connectionString = "Server=localhost; Database=testbarroc; Uid=root; Pwd=;";
                MySqlConnection connection = new MySqlConnection(connectionString);
                connection.Open();

                MySqlCommand cmd = new MySqlCommand(connectionString, connection);
                cmd.CommandText = "Update invoices set betaald_op= " +
                                        "@betaald_op WHERE id = @id";
                cmd.Prepare();

                cmd.Parameters.AddWithValue("@betaald_op", StartDate);
                cmd.Parameters.AddWithValue("@id", id);
                //cmd.Parameters.AddWithValue("@betaald_op", "01/01/2019");
                cmd.ExecuteNonQuery();

            }
            catch (Exception ex)
            {

                MessageBox.Show(ex.Message);
            }
        }
    }
}
