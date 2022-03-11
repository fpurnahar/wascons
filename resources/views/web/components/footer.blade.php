  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-6 col-md-6">
                      <div class="footer-info">
                          @foreach ($information_company as $item)
                              <h3>{{ $item->company_name }}</h3>
                              <p>
                                  {{ $item->company_address }}<br><br>
                                  <strong>Phone:</strong> {{ $item->company_number_phone }}<br>
                                  <strong>Email:</strong> {{ $item->company_email }}<br>
                              </p>
                              <div class="social-links mt-3">
                                  <a href="{{ $item->company_facebook }}" class="facebook" target="_blank"><i
                                          class="bi bi-facebook"></i></a>
                                  <a href="{{ $item->company_instagram }}" class="instagram" target="_blank"><i
                                          class="bi bi-instagram"></i></a>
                                  <a href="{{ $item->company_linkedin }}" class="linkedin" target="_blank"><i
                                          class="bi bi-linkedin"></i></i></a>
                              </div>
                      </div>
                      @endforeach
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#aboute">About us</a>
                          </li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#layanan">layanan</a>
                          </li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#service">Services</a>
                          </li>
                          <li><i class="bx bx-chevron-right"></i> <a
                                  href="{{ route('home') }}#portfolio">portfolio</a>
                          </li>
                          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}#contact">contact</a>
                          </li>
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Our Services</h4>
                      <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Tenaga Profesional</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design 2D & 3D</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Harga Kompetitif</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">First Hand</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Bergaransi</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a
                                  href="https://api.whatsapp.com/send?phone={{ $item->company_number_phone }}&text=Hallo"
                                  target="_blank">Konsultasi</a>
                          </li>
                      </ul>
                  </div>

                  {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> --}}

              </div>
          </div>
      </div>

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>{{ date('Y') }}</span></strong>. Created by <a
                  href="https://www.instagram.com/fpurnahar" target="_blank">fpurnahar</a>.
          </div>
      </div>
  </footer><!-- End Footer -->
