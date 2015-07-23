using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.IO;
using System.Web.UI;
using System.Text;
using System.Web.UI.WebControls;
using CompileService;
using System.Threading;
public partial class ComplieMain : System.Web.UI.Page
{
    static String Text_Field="" ;
    static String Login_Name = "";
    protected void Page_Load(object sender, EventArgs e)
    {
        
        Login_Name=Session["Name"].ToString();
        Label2.Text = Login_Name;
        if(Login_Name.Equals("")||(Login_Name==null))
        {
            Response.Redirect("Login.aspx");
        }
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        String[] ret=new String[300];
        try
        {
            Text_Field= ta.Value;
            if (Text_Field.Length <= 0)
            {
                Label1.Text="Code Please .. !";
            }
            else{
            String[] err = new String[200];
            Service1 ser = new Service1();
            ret=ser.Compile(Text_Field,Login_Name);
            StringBuilder sw = new StringBuilder();
            sw.Append(err);
            if (ret.Length > 0)
            {
                foreach (String t in ret)
                {
                    Label1.Text += t;
                }

            }
            else
            {
                run.Visible = true;
            }
            
        }
        }
        catch (Exception e1)
        {
            Label1.Text = e1.ToString();
        }
    }
    protected void Button2_Click(object sender, EventArgs e)
    {
        String[] ret = new String[300];
        Service1 ser = new Service1();
        ret=ser.run();
        Label1.Text = "Executing .. ";
        Thread.Sleep(2000);
        Label1.Text = " ";
        foreach (String t in ret)
        {
            Label1.Text += (t+"\n");
        }

    }
}
