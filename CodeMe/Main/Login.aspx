<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="Login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        body {
            background:url("icloud-login.png");
            background-repeat:no-repeat;
        }
        #name {
            position:absolute;
            top:240px;
            left:200px;
        }
        #pass {
            position:absolute;
            top:280px;
            left:200px;
        }
        #Button1 {
            position:absolute;
            top:330px;
            left:220px;
        }
    </style>
</head>
<body >
            <pre>
    <form id="form1" runat="server">
    <div>
    
    </div>

        <div style="margin-left: 120px">
            <br />
            <br />
            <br />
            <br />
            
            <br />
            <br />
            <br />
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" runat="server" required="required" value="" id="name" />

            <br />
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="password" runat="server" required="required" value="" id="pass" />
            <br />
            <br />


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<asp:Button ID="Button1" runat="server" BorderStyle="Solid" Text="Login.." OnClick="Button1_Click" />
        </div>
            </pre>
    </form>
</body>
</html>
