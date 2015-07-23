using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Apriori
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            Welcome.Text += "Frequent Item Generator Using \n Apriori Algorithm";
            Welcome.Refresh();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            ViewDB db = new ViewDB();
            db.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            AprioriGen gen = new AprioriGen();
            gen.Show();
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            ViewDB d = new ViewDB();
            d.Show();
        }
    }
}
