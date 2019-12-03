using System;
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
    public partial class Home : Form
    {
        public Home()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Form Factuur_Anmaken = new Factuur_Anmaken();
            Factuur_Anmaken.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Form Facturen = new Facturen();
            Facturen.Show();
        }
    }
}
