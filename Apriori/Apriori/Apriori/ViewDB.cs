using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Threading;
using System.Data.SqlClient;

namespace Apriori
{
    public partial class ViewDB : Form
    {
        public ViewDB()
        {
            InitializeComponent();
            Progress();
        }

        private void ViewDB_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'aprioriDataSet.Books' table. You can move, or remove it, as needed.
            //this.booksTableAdapter.Fill(this.aprioriDataSet.Books);
            // TODO: This line of code loads data into the 'database2DataSet.BOOK' table. You can move, or remove it, as needed.
            //this.bOOKTableAdapter.Fill(this.database2DataSet.BOOK);
            // TODO: This line of code loads data into the 'aprioriDataSet.Books' table. You can move, or remove it, as needed.
          //  this.booksTableAdapter.Fill(this.aprioriDataSet.Books);
            label1.Text = "Click To View The Database.. !";
            label2.Text = "";
            Progress();
          
        }
        public void Progress()
        {
            ProgressBar1.Minimum = 1;
            ProgressBar1.Maximum = 100;
            ProgressBar1.Value = 1;
            ProgressBar1.Step = 1;
            int i = 0;
            for (i = 0; i < 100; i++)
            {
                label2.Text = i + " %";
                label2.Refresh();
                Thread.Sleep(50);
                ProgressBar1.PerformStep();
            }
            if (i > 99)
            {
                ProgressBar1.Visible = false;
                dataGridView1.Visible = true;
                label2.Visible = false;
                label1.Visible = false;
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            
            ProgressBar1.Visible = true;
            label1.Text = "Loading...";
            label1.Refresh();
            label2.Text += "";
            label2.Refresh();
            button1.Visible = false;
            Progress();
        }
        public void readDB()
        {
            button1.Visible = false;
            try
            {

                SqlConnection con = new SqlConnection(@"Data Source=(LocalDB)\v11.0;AttachDbFilename='D:\D\Xtreme Me\Apriori\Apriori\db\AP.mdf';Integrated Security=True;Connect Timeout=30");
                con.Open();
                SqlDataReader read = null;
                SqlCommand cmd = new SqlCommand("SELECT * FROM BOOKS", con);
                read = cmd.ExecuteReader();
               
               
            }
            catch (Exception e1)
            {
                MessageBox.Show(e1.ToString());
            }
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void ViewDB_Load_1(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'aPDataSet.BOOKS' table. You can move, or remove it, as needed.
            this.bOOKSTableAdapter.Fill(this.aPDataSet.BOOKS);

        }
       
    }
}
