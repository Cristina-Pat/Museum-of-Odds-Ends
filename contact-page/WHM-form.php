<?php
    // required PHP files should "die" if IS_SAFE is not defined
if (!defined('IS_SAFE')) {
    // Prevent this file run directly, displaying a warnning
    die(basename(__FILE__)  . ' cannot be executed directly!');
}
?>

<h2>Contact Walton Hall Museum of Odds &amp; Ends</h2>

<p>Please contact Walton Hall Museum of Odds &amp; End for further information. 
    We will get back to you as soon as we can.</p>
<form method="POST" action="<?php echo($url) ?>">
    <p>
    <label for="name">Name:</label>
        <input
          type="text"
          name="name"
          id="name"
          required
          maxlength="20"
          minlength="10"
          value=""
        />
    </p>
    <p>
    <label for="email">E-mail:</label>
        <input 
            type="email" 
            name="email" 
            id="email" 
            required
            placeholder="type your e-mail addresse here"
        />
    </p>
    <p>
        <label for="message">Type your message here</label><br />
        <textarea
          name="message"
          id="message"
          rows="10"
          cols="30"
          required
          maxlength="100"
          minlength="10"
        ></textarea>
      </p>

    <input type="submit" value="Submit">
</form>