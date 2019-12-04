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
                MySqlCommand allsupplies = new MySqlCommand("SELECT name, price FROM supplies", connection);
                using (MySqlDataReader reader = allsupplies.ExecuteReader())
                {
                    Console.WriteLine(reader.FieldCount);
                    if (reader.HasRows)
                    {
                        Console.WriteLine("1.");

                        while (reader.Read())
                        {
                            string employeesName = (string)reader.GetValue(0);

                            Console.WriteLine(employeesName);

                            supplieslistBox.Items.Add(employeesName);
                        }
                    }
                    else
                    {
                        Console.WriteLine("2.");
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
    }
}
