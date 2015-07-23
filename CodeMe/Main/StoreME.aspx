<%@ Page Language="C#" AutoEventWireup="true" CodeFile="StoreME.aspx.cs" Inherits="StoreME" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <style>
        a ,hai{
            position: fixed;
            right: 80px;
            width: 3em;
            top: 34px;
            height: 19px;
        }
        body {
            background:url("Images/temp.jpg");
            background:url("Images/blue-energy.jpg");
            background:no-repeat;
            background:inherit;
            background-color:#0d4866;
        }
        .auto-style1 {
            width: 700px;
            height: 252px;
        }
    </style>
    <title></title>
</head>
<body>
    
    <form id="form1" runat="server">
    
<p>Store With Me..
    <asp:LinkButton id="hai" runat="server" OnClick="MyFunction_Click" >LogOut</asp:LinkButton>
        </p>
    <p>                 Hello&nbsp; ...
        <asp:Literal ID="Literal1" runat="server"></asp:Literal>
        <img alt="Storage Provider" class="auto-style1" src="Images/temp.jpg" /></p>
        &nbsp;<center>Store With us ...Coz Storing Files In System is Too MainStream .. :P</center>Please Wait coz Site is down for Maintainance... :)</p>
       <center> <asp:FileUpload ID="FileUploadControl" runat="server" /></center>
    <div style="margin-left: 160px">
    
        <br />
        <asp:Label ID="StatusLabel" runat="server" Text="Label"></asp:Label>
    
    </div>
        <p>
            <center><asp:Button ID="Upload" runat="server" Text="Upload.. :)" OnClick="Upload_Click" /></center>
            </form>
        
    
        
</body>
</html>
