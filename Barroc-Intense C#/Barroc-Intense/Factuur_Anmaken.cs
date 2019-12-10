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
using System.Data.SqlClient;

namespace Barroc_Intense
{
    public partial class Factuur_Anmaken : Form
    {
        public Factuur_Anmaken()
        {
            InitializeComponent();
            MySqlConnection connection = new MySqlConnection("Server=127.0.0.1;Database=testbarroc;Uid=root;Pwd=;");
            connection.Open();

            try
            {
                //new code

                DataSet ds = new DataSet();
                string Users_query = "SELECT id, name FROM users WHERE users.role_id = 7";
                MySqlDataAdapter users_da = new MySqlDataAdapter(Users_query, connection);

                users_da.Fill(ds, "users");
                nameComboBox.DisplayMember = "name";
                nameComboBox.ValueMember = "id";
                nameComboBox.DataSource = ds.Tables["users"];



                string product_query = "SELECT id, name, price_per_unit FROM products where in_stock > 0 ";
                MySqlDataAdapter product_da = new MySqlDataAdapter(product_query, connection);

                product_da.Fill(ds, "products");
                productComboBox.DisplayMember = "name";
                productComboBox.ValueMember = "id";
                productComboBox.DataSource = ds.Tables["products"];

                CalculatePrice(Convert.ToInt32(productComboBox.SelectedValue), Convert.ToInt32(numericUpDown1.Value));
            }


            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }


        }

        private void makeButton_Click(object sender, EventArgs e)
        {
            try
            {
              
                int com_name = Convert.ToInt32 ( nameComboBox.SelectedValue);
                int pro_name = Convert.ToInt32( productComboBox.SelectedValue);
                int  antaal = Convert.ToInt32( numericUpDown1.Value);
                Double Price = Convert.ToDouble(prijslabel.Text);

                DateTime StartDate = dateTimePicker1.Value;
                DateTime StartTimeCombined = new DateTime(StartDate.Year, StartDate.Month, StartDate.Day);

                string connectionString = "Server=localhost; Database=testbarroc; Uid=root; Pwd=;";
                MySqlConnection connection = new MySqlConnection(connectionString);
                connection.Open();

                MySqlCommand cmd = new MySqlCommand(connectionString, connection);
                cmd.CommandText = "INSERT INTO invoices(user_id,supply_id,antaal,total,created_at) " +
                                        "VALUES(@user_id,@supply_id,@antaal,@total,@created_at)";
                cmd.Prepare();
                cmd.Parameters.AddWithValue("@user_id", com_name);
                cmd.Parameters.AddWithValue("@supply_id", pro_name);
                cmd.Parameters.AddWithValue("@antaal", antaal);
                cmd.Parameters.AddWithValue("@total", Price);
                cmd.Parameters.AddWithValue("@created_at", StartDate);
                cmd.ExecuteNonQuery();
                //Form Factuur_Anmaken = new Factuur_Anmaken();
                //Factuur_Anmaken.Show();
            }
            catch (Exception ex)
            {

                MessageBox.Show(ex.Message);
            }
        }

        private void productComboBox_SelectionChangeCommitted(object sender, EventArgs e)
        {
            ComboBox cmb = (ComboBox)sender;
            CalculatePrice(Convert.ToInt32( cmb.SelectedValue) , Convert.ToInt32(numericUpDown1.Value));


        }

        private void numericUpDown1_ValueChanged(object sender, EventArgs e)
        {
            CalculatePrice( Convert.ToInt32  (productComboBox.SelectedValue ), Convert.ToInt32 ( numericUpDown1.Value));
            
            
        }
        public Double CalculatePrice(int product_id, int quantity ) {

            Double price = 0;

            MySqlConnection connection = new MySqlConnection("Server=127.0.0.1;Database=testbarroc;Uid=root;Pwd=;");
            connection.Open();

            MySqlCommand allUsersCommand = new MySqlCommand("SELECT price_per_unit FROM products where id = " + product_id + ";", connection);

            using (MySqlDataReader reader = allUsersCommand.ExecuteReader())
            {

                if (reader.HasRows)
                {
                    while (reader.Read())
                    {

                        if (numericUpDown1.Value > 0)
                        {
                            price=  Convert.ToDouble( reader[0]) * quantity;
                            prijslabel.Text = price.ToString();
                        }

                    }
                }
            }
            return price; 

        }
    }
}
