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

            //try
            //{

            //    //DataSet ds = new DataSet();
            //    //string Users_query = "SELECT * FROM `invoices";
            //    //MySqlDataAdapter users_da = new MySqlDataAdapter(Users_query, connection);

            //    //users_da.Fill(ds, "users");
            //    //listView1.DisplayMember = "name";
            //    //listView1.ValueMember = "id";
            //    //dataGridView1.DataSource = ds.Tables["users"];






            //    MySqlCommand allinvoices = new MySqlCommand("SELECT users.name,supplies.name, antaal, total, betaald_op FROM invoices INNER JOIN users ON users.id=invoices.user_id INNER JOIN supplies ON supplies.id=invoices.supply_id", connection);
            //    using (MySqlDataReader reader = allinvoices.ExecuteReader())
            //    {
            //        Console.WriteLine(reader.FieldCount);
            //        if (reader.HasRows)
            //        {
            //            while (reader.Read())
            //            {

            //                string userName = (string)reader.GetValue(0);
            //                string supplieyName = (string)reader.GetValue(1);
                            //decimal antaal = (decimal)reader.GetValue(2);
                            //double total = (double)reader.GetValue(3);
                            //string betaald_op = (string)reader.GetValue(4);

            //                string[] row = { userName, supplieyName };
            //                var listViewItem = new ListViewItem(row);
            //                dataGridView1.Rows.Add(listViewItem);


            //            }
            //        }

            //    }
            //}
            //catch (Exception ex)
            //{
            //    MessageBox.Show(ex.Message);
            //}
        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            string connStr = "server=localhost;user=root;database=testbarroc;port=3306;password=";
            MySqlConnection conn = new MySqlConnection(connStr);
            conn.Open();

            MySqlCommand cmd = new MySqlCommand("SELECT users.name,supplies.name, antaal, total, betaald_op FROM invoices INNER JOIN users ON users.id=invoices.user_id INNER JOIN supplies ON supplies.id=invoices.supply_id", conn);
            MySqlDataReader dr = cmd.ExecuteReader();

            dataGridView1.Rows.Add(dr);
        }
    }
}
