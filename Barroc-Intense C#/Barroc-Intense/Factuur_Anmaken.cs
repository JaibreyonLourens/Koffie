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
    public partial class Factuur_Anmaken : Form
    {
        public Factuur_Anmaken()
        {
            InitializeComponent();
            MySqlConnection connection = new MySqlConnection("Server=127.0.0.1;Database=testbarroc;Uid=root;Pwd=;");
            connection.Open();

            try
            {
                MySqlCommand allsupplies = new MySqlCommand("SELECT name FROM users", connection);
                using (MySqlDataReader reader = allsupplies.ExecuteReader())
                {
                  
                    if (reader.HasRows)
                    {

                        while (reader.Read())
                        {
                            string userName = (string)reader.GetValue(0);

                           

                            nameComboBox.Items.Add(userName);
                        }
                    }
                    else
                    {

                    }

                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }


            try
            {
                MySqlCommand allsupplies = new MySqlCommand("SELECT name FROM supplies", connection);
                using (MySqlDataReader reader = allsupplies.ExecuteReader())
                {
                  
                    if (reader.HasRows)
                    {
                        while (reader.Read())
                        {
                            string suppliesName = (string)reader.GetValue(0);

                            productComboBox.Items.Add(suppliesName);
                        }
                    }
                    else
                    {
                        
                    }

                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }


        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void makeButton_Click(object sender, EventArgs e)
        {

        }

        private void nameComboBox_SelectedIndexChanged(object sender, EventArgs e)
        {
            
        }

        private void prijslabel_Click(object sender, EventArgs e)
        {

        }

        private void productComboBox_SelectedIndexChanged(object sender, EventArgs e)
        {
            MySqlConnection connection = new MySqlConnection("Server=127.0.0.1;Database=testbarroc;Uid=root;Pwd=;");
            connection.Open();

            /* string id = productComboBox.SelectedItem.ToString();*/
            MySqlCommand allUsersCommand = new MySqlCommand("SELECT  price FROM supplies", connection);

            using (MySqlDataReader reader = allUsersCommand.ExecuteReader())
            {

                if (reader.HasRows)
                {

                    while (reader.Read())
                    {
                        prijslabel.Text = "$" + allUsersCommand.ToString();
                    }
                }
                else
                {
                }
            }
        }
    }
}
