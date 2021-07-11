@extends('Frontend.layouts.master')
@section('content')
  <section>
    <div class="containerr_contact mb-4">
      <div class="page-header text-center mt-4">
        <h1>Contact Me <small>Feel free to leave your message</small></h1>
      </div>
    

      <div class="row">
        <div class="col-md-5 text-center">
          <h4 class="page-titlle text-center text-warning">
            Contact Information
          </h4>

            <div class="table-responsive">
              <table class="table table-condensed">
                <tr>
                  <td><span class="glyphicon glyphicon-home"></span><strong>Address :</strong></td>
                
                  <td>
	              <div>
	                <p class="para">Tiger Internet Private Limited,
	                  Village: Hatgari, Bibirpukur Bazzer,<br>
	                  Tindighi Rood, Narhatta<br>
	                  Kahaloo, Bogra,<br>
	                  Bangladesh.</p>
	              </div>
                  </td>
                </tr>



                <tr>
                  <td><span class="glyphicon glyphicon-envelope"></span><strong>Email :</strong></td>
                
                  <td>
                    <address>
                      tigerelectronicstore@gmail.com
                    </address>
                  </td>
                </tr>



                <tr>
                  <td><span class="glyphicon glyphicon-earphone"></span><strong>Phone :</strong></td>
                
                  <td>
                    <address>
                      +08801758152475</br>
                      
                    </address>
                  </td>
                </tr>

              </table>

            </div><!--table responsive-->

        </div><!--contact information-->
        <div class="col-md-5 col-md-offset-2">
          <h4 class="page-titlle text-center text-warning">
            Contact Form
          </h4>

            <form action="" method="">
              <div class="form-group">
                <label for="name">Your Name :</label>
                <input type="text" class="form-control" placeholder="Enter Your full name" id="name">
              </div>

              <div class="form-group">
                <label for="email">Your Email :</label>
                <input type="email" class="form-control" placeholder="Enter Your Email Address" id="emil">
              </div>

              <div class="form-group">
                <label for="subject">Your Subject :</label>
                <input type="text" class="form-control" placeholder="Enter Your Subject" id="subject">
              </div>

              <div class="form-group">
                <label for="message">Your Message :</label>
                <textarea name="" id="message" cols="30" rows="5" class="form-control"></textarea>
              </div>

              <button type="submit" class="btn btn-info btn-block">Send</button>

            </form>
        </div><!--contact information-->
        
      </div><!--row fluid-->


    </div><!--contact container-->
  </section>
@endsection