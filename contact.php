<?php include('template-parts/header.php'); ?>
<div class="container contact-page">
    COPY AND PASTE MASTA
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2510.854706892908!2d-2.8614776842486123!3d51.000356979555114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48720d6865c70499%3A0xd6cd1e257ef499af!2sTeapot+Creative!5e0!3m2!1sen!2suk!4v1448286827698" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <h1>Get in touch!</h1>
    
    <form id="contactForm" class="form"  method="post" >  
                    		<label for="cf_name" class="contact">Name:<span>&nbsp;*</span></label>
                            <input type="text" id="cf_name" name="cf_name" placeholder="Enter your name..." onfocus="if(this.value == 'Enter your name...') {this.value=''}" onblur="if(this.value == ''){this.value ='Enter your name...'}">     
                            <br><label for="cf_email" class="contact">E-mail Address:<span>&nbsp;*</span></label>
                            <input type="text" id="cf_email" name="cf_email" placeholder="Enter your e-mail..." onfocus="if(this.value == 'Enter your e-mail...') {this.value=''}" onblur="if(this.value == ''){this.value ='Enter your e-mail...'}">  
                           	<label for="cf_subject" class="contact">Subject:<span>&nbsp;*</span></label>
                            <input type="text" id="cf_subject" name="cf_subject" placeholder="Enter your subject..." onfocus="if(this.value == 'Enter your subject...') {this.value=''}" onblur="if(this.value == ''){this.value ='Enter your subject...'}">  
                           	<label for="cf_message" class="contact">Message:<span>&nbsp;*</span></label>
                            <textarea id="cf_message" name="cf_message" placeholder="Enter your message..." onfocus="if(this.placeholder == 'Enter your message...') {this.placeholder=''}" onblur="if(this.placeholder == ''){this.placeholder ='Enter your message...'}"></textarea>  
                            <input type="submit" value="SEND" id="send">  
                    </form>
    
    <!-- FOOTER -->
    <footer>
    	<p class="pull-right"><a href="#">Back to top Y'all</a></p>
    	<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        <p>Footer Text!</p>
    </footer>

</div><!-- /.container -->

<?php include('template-parts/footer.php'); ?>