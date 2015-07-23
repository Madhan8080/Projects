using System;
using System.Windows.Forms;
using System.Data.SqlClient;
using System.Collections.Generic;
using System.Linq;
namespace Apriori
{
    public partial class AprioriGen : Form
    {
        public AprioriGen()
        {
            InitializeComponent();
        }
        static int min_sup;
        SqlDataReader read;
        SqlConnection c = null;
        SqlCommand cmd;
        static int[] val=new int[10];
        static int[] count = new int[10];
        public static List<String> db=new List<String>();
        static public List<String> book = new List<string>();
        String[] sec = new String[1000];
        private void Apriori_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            label2.Text = "";
            label3.Text = "";
            label4.Text = "";
            label5.Text = "";
            label6.Text = "";
            label7.Text = "";
            label1.Refresh();
            label2.Refresh();
            label3.Refresh();
            label4.Refresh();
            label5.Refresh();
            label6.Refresh();
            label7.Refresh();
           
            try
            {
                min_sup = int.Parse(textBox1.Text);
                readDB();
            }
            catch (Exception e1)
            {
                MessageBox.Show("Please Enter the Minimum Support Count ..");
                Console.WriteLine(e1.ToString());   
            }
            int i;
            db.Clear();
            book.Clear();
            for (i = 1; i < 8; i++)
            {
                count[i] = 0;
                sec[i] = null;
            }
            
        }
        public void readDB()
        {
            try
            {
                c = new SqlConnection(@"Data Source=(LocalDB)\v11.0;AttachDbFilename='D:\D\Xtreme Me\Apriori\Apriori\db\AP.mdf';Integrated Security=True;Connect Timeout=30");
              
                c.Open();
                cmd = new SqlCommand("SELECT * FROM BOOKS", c);
                read = cmd.ExecuteReader();
                int i=0;
                while (read.Read())
                {
                    for (i = 0; i < 7; i++)
                    {
                        if (read.GetInt32(i) == 1)
                        {
                            count[i]++;
                        }
                    }
                }
                read.Close();
                Apriori_Cal();
            }
            catch (Exception e1)
            {
                MessageBox.Show(e1.ToString());
            }
        }
        public void Apriori_Cal()
        {
            label3.Text = "";
            label2.Text = "";
            label2.Refresh();
            label3.Refresh();
            String[] temp = { " ", "JAVA", "DBMS", "Cpp", "Code_Complete", "Network", "ASP", "HTML" };
            int i, j;
            for (i = 1; i < 8; i++)
            {
                if (count[i] >= min_sup)
                {
                    db.Add(temp[i]);
                    book.Add(temp[i]);
                }
            }

            int n = 0;
            label5.Text = "First Item Set Generated .. !";
            foreach (String t in book)
            {
                label2.Text += t + ",";
                label2.Refresh();
                sec[n] = t;
                n++;
            }

            
            if (book.Count <= 2)
            {
                label3.Text = "The Frequent Item Set Generated are ... !";
                MessageBox.Show(book.Count + "");
                foreach (String t in db)
                {
                    label4.Text += (t + "\n");
                    label4.Refresh();
                }
            }
            else
            {
                book.Clear();

                book.Clear();
            int clear_flag = 0;
            label2.Refresh();
            for (i = 0; i < n; i++)
            {
                for (j = i + 1; j < n; j++)
                {

                    cmd = new SqlCommand("Select COUNT(*) from Books where [" + sec[i] + "]='1' AND [" + sec[j] + "]='1'", c);
                    int val = (int)cmd.ExecuteScalar();
                    // MessageBox.Show(sec[i] + " " + sec[j]+" COUNT : "+val);
                    if (val >= min_sup)
                    {
                        clear_flag++;
                        if (clear_flag == 1)
                        {
                            db.Clear();
                        }
                        book.Add(sec[i]);
                        book.Add(sec[j]);
                        db.Add(sec[i] + "," + sec[j]);
                    }
                }
            }
            
           
                label6.Text = "Second Item Set Generated .. !";
                label6.Refresh();
                foreach (String t in db)
                {
                    label3.Text += (t + ",");
                    label3.Refresh();
                }
                n = 0;
                foreach (String t in book)
                {
                    sec[n] = t;
                    n++;
                }
                book = book.Distinct().ToList();
                n = 0;
                foreach (String t in book)
                {
                    sec[n] = t;
                    n++;
                }
                int k = 0;
                if (book.Count <= 3)
                {
                    label7.Text = "The Frequent Item Set Generated are ... !";
                    foreach (String t in db)
                    {
                        label4.Text += (t + "\n");
                        label4.Refresh();
                    }
                }
                else
                {
                    book.Clear();
                    label7.Text = "Third Item Set Generated .. !";
                    label7.Refresh();
                    clear_flag = 0;
                    for (i = 0; i < n; i++)
                    {
                        for (j = i + 1; j < n; j++)
                        {
                            for (k = j + 1; k < n; k++)
                            {
                                cmd = new SqlCommand("select COUNT(*) from Books where [" + sec[i] + "]='1' AND [" + sec[j] + "]='1' AND [" + sec[k] + "]='1'", c);
                                int val = (int)cmd.ExecuteScalar();
                                // MessageBox.Show(sec[i] + " " + sec[j]+" COUNT : "+val);
                                if (val >= min_sup)
                                {
                                    clear_flag++;
                                    if (clear_flag == 1)
                                    {
                                        db.Clear();
                                    }

                                    book.Add(sec[i]);
                                    book.Add(sec[j]);
                                    book.Add(sec[k]);
                                    db.Add(sec[i] + "," + sec[j] + sec[k]);
                                }
                            }
                        }
                    }

                   
                    foreach (String t in db)
                    {
                        label4.Text += (t + "\n");
                        label4.Refresh();
                       // MessageBox.Show(t);

                    }
                }
                book = db;


            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Result res = new Result();
            res.Show();
            this.Close();
        }
    }
}
