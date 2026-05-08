@include('front-end.header')


<!--page title start-->

<section class="page-title">
  <div class="page-title-bg" data-bg-img="{{ asset('front-end/images/bg/bg08.jpg') }}"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="theme-breadcrumb-box">
          <h1>Contact</h1>
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/') }}">
                  <i class="bi bi-house-door me-1"></i>Home </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--contact start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 border-end border-light pe-lg-10">
        <div class="themeht-anim-heading ">
          <h3 class="themeht-anim-text">We are always ready to help you and answer your questions</h3>
        </div>
        <p class="mb-4">Pacific hake false trevally queen parrotfish black prickleback mosshead warbonnet sweeper! Greenling sleeper.</p>
        <div class="contact-media mb-5">
          <div class="contact-info">
            <i class="flaticon flaticon-email-3"></i>
            <div class="contact-text">
              <h6>Interested in work with us?</h6>
              <a href="mailto:agency@askdigitalagency.com">agency@askdigitalagency.com</a>
            </div>
          </div>
        </div>
        <div class="contact-media mb-5">
          <div class="contact-info">
            <i class="flaticon flaticon-phone"></i>
            <div class="contact-text">
              <h6>Feel Free To Call Us</h6>
              <a href="tel:+91 8219941967">+91 8219941967</a>
            </div>
          </div>
        </div>
        <div class="contact-media mb-5">
          <div class="contact-info">
            <i class="flaticon flaticon-location"></i>
            <div class="contact-text">
              <h6>Visit Our Location</h6>
              <p class="mb-0">Ss Omnia, Sector 86, Gurugram, Haryana 122004.</p>
            </div>
          </div>
        </div>
        <div class="social-icons border-top border-light pt-8 mt-8">
          <ul class="list-inline mb-0">
            <li>
              <a href="https://www.facebook.com/people/Ask-Digital-Agency/61558235759862/?rdid=M3zQrPv89ieCHqqm&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F16K7iWbFy3%2F">
                <i class="flaticon flaticon-facebook-app-symbol"></i>
              </a>
            </li>
           <li>
  <a href="https://www.youtube.com/@askdigitalagency" target="_blank">
    <i class="flaticon flaticon-youtube"></i>
  </a>
</li>

            <li>
              <a href="https://www.linkedin.com/company/ask-digital-agency/">
                <i class="flaticon flaticon-linkedin"></i>
              </a>
            </li>
            <li>
               <a href="https://wa.me/918219941967" target="_blank">
                <i class="flaticon flaticon-whatsapp"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mt-10 mt-lg-0 ps-lg-10">
        <div class="theme-title style-1 mb-4">
          <div class="ht-subtitle">
            <h6>Contact Us</h6>
            <span class="border-effect"></span>
            <span class="border-effect2"></span>
          </div>
          <h2 class="text-anime-style"> Just say hello</h2>
          <p>Marketing platform is the intelligent digital channels. Complete the form to talk to a member of our team about getting started.</p>
        </div>
 <form id="contactForm">
        @csrf  <!-- Laravel CSRF Token -->
        <div class="messages"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                 <button type="submit" class="themeht-btn primary-btn"><span class="btn-icon1">
                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                </svg>
              </span>
              <span class="btn-text">Send Message</span>
              <span class="btn-icon2">
                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 3.48332C1.33992 4.01702 2.77535 4.47497 4.44459 4.21895C5.10724 4.11733 5.79528 3.90507 6.48839 3.55078L0.824819 13.3724L2.01532 14L7.84278 3.89861C7.81701 4.8049 7.97533 5.60791 8.25518 6.30612C8.8561 7.80557 9.99183 8.75595 10.899 9.17916L11.5 8.01969C10.876 7.7286 9.99665 7.01577 9.52822 5.84694C9.06791 4.69843 8.97792 3.04121 10.042 0.804358L9.48803 0.567179L9.1229 0.374676L8.57351 0C7.06359 1.9927 5.50583 2.74733 4.22725 2.94342C2.92606 3.14299 1.83564 2.77691 1.25795 2.4098L0.5 3.48332Z"></path>
                </svg>
              </span> </button>
                <!--<button type="submit" class="themeht-btn primary-btn">-->
                <!--    <span class="btn-text">Send Message</span>-->
                <!--</button>-->
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!-- SweetAlert & AJAX Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $('#contactForm').submit(function (e) {
            e.preventDefault();

          let formData = {
    _token: "{{ csrf_token() }}",
    name: $('#form_name').val(),
    email: $('#form_email').val(),
    phone: $('#form_phone').val(),
    subject: $('#form_subject').val(),
    message: $('#form_message').val(),
};

            $.ajax({
                type: 'POST',
                url: "{{ route('contact.store') }}",
                data: formData,
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: response.message
                    });

                    $('#contactForm')[0].reset();
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '';
                    
                    $.each(errors, function (key, value) {
                        errorMessage += value[0] + '\n';
                    });

                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: errorMessage
                    });
                }
            });
        });
    });
</script>

</section>

<section class="overflow-hidden p-0">
  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-md-12">
        <div class="map iframe-h">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.952464515035!2d76.95388467521992!3d28.390503675797788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbc590a9c9ed8925%3A0x9341367e22063d6!2sAsk%20Digital%20Agency!5e0!3m2!1sen!2sin!4v1778220708218!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <iframe src="https://www.google.com/maps/d/embed?mid=1ybxd1iErruNm1aKFgN0Fxt20E0Pfhtw&ehbc=2E312F" width="640" height="480"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact end-->

</div>

<!--body content end--> 

@include('front-end.footer')




