<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    sendEmail($name, $email, $subject, $message);

    header("Location: index.html");
    exit();
}

function sendEmail($name, $email, $subject, $message)
{
    $to = "computerpry1@gmail.com";
    $body = "Name: $name\nEmail: $email\n\nMessage: \n$message";

    $headers = "From: $email";

    mail($to,$subject,$body,$headers);
}

/*
using System;
using System.Net.Mail;

class Program
{
    static void Main(string[] args)
    {
        if (System.Web.HttpContext.Current.Request.HttpMethod == "POST")
        {
            string name = System.Web.HttpContext.Current.Request.Form["name"];
            string email = System.Web.HttpContext.Current.Request.Form["email"];
            string subject = System.Web.HttpContext.Current.Request.Form["subject"];
            string message = System.Web.HttpContext.Current.Request.Form["message"];
            SendEmail(name, email, subject, message);
            System.Web.HttpContext.Current.Response.Redirect("index.html");
            System.Web.HttpContext.Current.Response.End();
        }
    }

    static void SendEmail(string name, string email, string subject, string message)
    {
        string to = "computerpry1@gmail.com";
        string body = $"Name: {name}\nEmail: {email}\n\nMessage: \n{message}";
        string from = email;
        MailMessage mail = new MailMessage(from, to, subject, body);
        SmtpClient smtp = new SmtpClient();
        smtp.Send(mail);
    }
}

*/

?>

