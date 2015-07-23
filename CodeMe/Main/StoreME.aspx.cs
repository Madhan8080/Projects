using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.IO;
using System.Web.UI.WebControls;

public partial class StoreME : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
       

        String name = (String)Session["Name"];
        if (name == ""||name==null)
        {
           Response.Redirect("Login.aspx");
        }
       else
        {
            Literal1.Text = name;
            
        }
        

    }
    protected void Upload_Click(object sender, EventArgs e)
    {
        try
            {
        if (FileUploadControl.HasFile)
        {
             if(FileUploadControl.PostedFile.ContentLength < 102400)
                {
                string filename = Path.GetFileName(FileUploadControl.FileName);
                FileUploadControl.SaveAs(Server.MapPath("~/") + filename);
                StatusLabel.Text = "Upload status: File uploaded!";
            
            }
            else{
                StatusLabel.Text = "Sorry We support Only Files with Sizw Less than 1 MB .. !";
                
             }
             }
        }
            catch (Exception ex)
            {
                StatusLabel.Text = "Upload status: The file could not be uploaded. The following error occured: " + ex.Message;
            }
        }

    

    protected void MyFunction_Click(object sender, EventArgs e)
    {
        Session["Name"] = "";
    }
}