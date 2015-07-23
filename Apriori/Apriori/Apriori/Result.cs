using System.Windows.Forms;
using System;
namespace Apriori
{
    public partial class Result : Form
    {
        public Result()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, System.EventArgs e)
        {
            this.Close();
        }

        private void Result_Load(object sender, System.EventArgs e)
        {
            label1.Text = "So The Generated Frequent Item Sets are..";
            label1.Refresh();
            foreach (String t in AprioriGen.db)
            {
                label2.Text += t+"\n";
                label2.Refresh();
            }
        }
    }
}
