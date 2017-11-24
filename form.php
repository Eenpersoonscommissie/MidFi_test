<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<!-- 
  Replace form-handler.php with URL where to send the form-data when the form is submitted
  Goto http://w3c.github.io/html-reference/input.text.html#input.text for more information on all attributes that can be used with text input field
-->
<form method="post" action="form-handler.php">
  <div>
    <h4>Text Field</h4>
    <label for="name">Name: <span class="required">*</span> </label>
    <input type="text" id="name" name="name" value="" placeholder="Your name" required="required" autofocus />
  </div>
  
  <div>
    <h4>Email Field</h4>
    <label for="email">Email Address: <span class="required">*</span> </label>
    <input type="email" id="email" name="email" value="" placeholder="your@email.com" required="required" />
  </div>
  
  <div>
    <h4>Password Field</h4>
    <label for="password">New Password: <span class="required">*</span> </label>
    <input type="password" id="password" name="password" value="" placeholder="" required="required" />
  </div>
  
  <div>
    <h4>Drop Down Menu</h4>
    <label for="subject">Subject:</label>
    <select id="subject" name="subject">
      <option value="hello">Subject 1</option>
      <option value="quote">Subject 2</option>
      <option value="general">Subject 3</option>
    </select>
  </div>
  
  <div>
    <h4>Text Area</h4>
    <label for="message">Message: <span class="required">*</span> </label>
    <textarea id="message" name="message" placeholder="Write your message here." required ></textarea>
  </div>
  
  <div>
    <h4>Radio Buttons</h4>
    <label for="radio-choice-1">Choice 1</label>
    <input type="radio" name="radio-choice" id="radio-choice-1" tabindex="2" value="choice-1">
    <label for="radio-choice-2">Choice 2</label>
    <input type="radio" name="radio-choice" id="radio-choice-2" tabindex="3" value="choice-2">
  </div>
  
  <div>
    <h4>Check Boxes</h4>
    <label for="checkbox1">Choice 1:</label>
    <input type="checkbox" name="checkbox1" id="checkbox1">
    <label for="checkbox2">Choice 2:</label>
    <input type="checkbox" name="checkbox2" id="checkbox2">
  </div>
  
  <div>
    <input type="submit" value="Submit" id="submit" />
  </div>
</form>
</body>
</html>
