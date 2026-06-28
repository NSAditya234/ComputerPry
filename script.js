

function sendEmail()
{
    Email.send({
        Host: "smtp.gmail.com",
        Username: "soniadityanarayan@gmail.com",
        Password: "soni@234892",
        To: "soniadityanarayan@gmail.com",
        From: "soniadityanarayan@gmail.com",
        Subject: "Hello",
        Body: "Test",
    })
    .then(function (message) {
        alert("message sent successfuly");
    });
}