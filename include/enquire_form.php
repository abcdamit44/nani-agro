
<!-- Enquire Form -->
    <div class="container enquire_form margin-top margin-bottom">
        <div class="h3 font-weight-bold mb-4">Enquire Now</div>
        <form action="" method="post">
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <input type="radio" name="radio" value='business' class="mr-2">
                            <label for="enq" class="form-label h5">Business Enquiry</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <input type="radio" name="radio" value='packing' class="mr-2">
                            <label for="enq" class="form-label h5">Private Label Packing</label>
                        </div>
                    </div>
                        
                </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" required class="form-control border-1">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Phone" class="form-control border-1">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" required class="form-control border-1">
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" placeholder="Country" class="form-control border-1">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <textarea name="msg" class="form-control border-1" required placeholder="Enter Your Message" style="padding:15px 10px; height:92px"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="enquire_now_inverse m-0 px-4 py-2">Submit Details</button>
            </div>
        </form>
        <?php 

    $radio = $_POST['radio'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $msg = $_POST['msg'];

    
    if ($radio == 'business') {
        $radio = "business";
    } else {
        $radio = "Packing";
    }
    

    $to = "naniagrofood@gmail.com";

    $subject = "Mail from ". $name;

    $txt = "Option = ".$radio."\r\n Name = ".$name."\r\n Email = ".$email."\r\n Phone = ".$phone."\r\n Country = ".$country."\r\n Message = ".$msg;

    $replyTo = "Thank you";
    if($name != NULL){
        mail($to,$subject,$txt);
        mail($email, "Thank you",$replyTo);
        echo "<div class='mt-3 alert alert-success'>Thank You</div>";
    }
?>
    </div>
<!-- End - Enquire Form -->