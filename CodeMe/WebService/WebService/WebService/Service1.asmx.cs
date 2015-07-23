using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.IO;
namespace WebService
{
    /// <summary>
    /// Summary description for Service1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class Service1 : System.Web.Services.WebService
    {

        [WebMethod]
        public string HelloWorld()
        {
            return "Hello World";
        }
        [WebMethod]
        public string[] Compile(String val,String Name)
        {
            String[] error=new String[200] ;
            //String UserDir = Server.MapPath("./files/" + Name);
            File.WriteAllText(@"D:Files\Sample.java", val);
            System.Diagnostics.Process process = new System.Diagnostics.Process();
            System.Diagnostics.ProcessStartInfo startInfo = new System.Diagnostics.ProcessStartInfo();
            startInfo.WindowStyle = System.Diagnostics.ProcessWindowStyle.Normal;
            startInfo.FileName = @"D:\Files\test.bat";
            startInfo.Arguments = "javac D:\\Files\\Sample.java";
            startInfo.UseShellExecute = false;
            startInfo.RedirectStandardError = true;
            process.StartInfo = startInfo;
            process.Start();
            string errors = process.StandardError.ReadToEnd();
            String errorFile = @"D:\Files\error.txt";
            File.WriteAllText(errorFile, errors);
            error = File.ReadAllLines(@"D:\Files\error.txt");
            return error;
        }
        [WebMethod]
        public string[] run()
        {
            String[] error = new String[200];
            
            System.Diagnostics.Process process = new System.Diagnostics.Process();
            System.Diagnostics.ProcessStartInfo startInfo = new System.Diagnostics.ProcessStartInfo();
            startInfo.WindowStyle = System.Diagnostics.ProcessWindowStyle.Normal;
            startInfo.FileName = @"D:\Files\runme.bat";
            startInfo.Arguments = "java D:\\Files\\Sample";
            startInfo.UseShellExecute = false;
            startInfo.RedirectStandardOutput = true;
            process.StartInfo = startInfo;
            process.Start();
            string errors = process.StandardOutput.ReadToEnd();
            process.StandardOutput.DiscardBufferedData();
            
            process.WaitForExit();
            String errorFile = @"D:\Files\run.txt";
            File.WriteAllText(errorFile, errors);
            error = File.ReadAllLines(@"D:\Files\run.txt");
            return error;
        }
    }
}