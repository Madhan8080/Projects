using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using localhost1;
public partial class Login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        String uname = name.Value;
        String pas = pass.Value;
        try
        {
            String val = "";
            Service1 ser=new Service1();
            val = ser.Login(uname, pas);
            val = "True";
            if(val.Contains("True"))
            {
                Session["Name"] = uname;
            Response.Redirect("Default.aspx");
            }
            else
            {
                Response.Write("Login Failed ... ! Please Check your Usename and password..!");
            }
        }
        catch (Exception e1)
        {
            Console.WriteLine("Error" + e1.ToString());
        }
    }
}