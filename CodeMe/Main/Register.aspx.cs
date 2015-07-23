using System;
using System.Collections.Generic;
using System.Linq;
using System.Collections;
using System.Configuration;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;
using System.Windows;
using System.Text;
using System.IO;
//using localhost;
public partial class Register : System.Web.UI.Page
{
    SqlDataAdapter ad1;
     //String cmd;
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        String name, age, email, pass;
        name = Uname.Text;
        age = Age.Text;
        email = Email.Value;
        pass = Pass.Value;
        DataSet ds = new DataSet();
              /* string connectionString =
            "server=.;" +
            "initial catalog=employee;" +
            "user id=sa;" +
            "password=sa123";*/
        try
        {
            //Service1 ser = new Service1();
            //ser.Insert_DB(name, pass);
    }
            
        catch (Exception e1)
        {
            
           
        }

    }
}