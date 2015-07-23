using System;
using System.ComponentModel;
using System.Windows.Forms;
using System.Drawing;
using SimpleChartFramework.charts;
using SimpleChartFramework.Items;
using SimpleChartFramework.style;
using System.Collections;
namespace Apriori
{
    public partial class Charts : Form
    {
        public Charts()
        {
            InitializeComponent();
        }
       
        private void backgroundWorker1_DoWork(object sender, DoWorkEventArgs e)
        {

        }

        private void Charts_Load(object sender, EventArgs e) 
        {
            
        }
       

        private void button1_Click(object sender, EventArgs e)
        {
            Graphics graphics = pictureBox1.CreateGraphics();
            graphics.Clear(pictureBox1.BackColor);
            float sum = 0.0f;
            int[] iarrPieValues = null;
            int lstValuesCount = 5;
            iarrPieValues = new int[lstValuesCount];
            int[] Val = new int[5];
            int i = 0;
            for (i = 1; i < 5; i++)
            {
                Val[i] = i*10;
            }
            for (int iCnt = 0; iCnt < lstValuesCount; iCnt++)
            {
                iarrPieValues[iCnt] = Val[iCnt];
                sum += iarrPieValues[iCnt];
            }

            Color[] color = { Color.Red, Color.Blue, Color.BlueViolet, Color.Yellow, Color.Green, Color.Aqua, Color.Cyan };
            Rectangle rect = new Rectangle(30, 10, 130, 130);
            float fDegValue = 0.0f;
            float fDegSum = 0.0f;

            for (int iCnt = 0; iCnt < iarrPieValues.Length; iCnt++)
            {
                fDegValue = (iarrPieValues[iCnt] / sum) * 360;
                Brush brush = new SolidBrush(color[iCnt]);
                graphics.FillPie(brush, rect, fDegSum, fDegValue);
                fDegSum += fDegValue;
                MessageBox.Show(fDegSum + " " + fDegValue + " ");
            }
            
        }

    }
}
