  <!-- ======= Top Bar ======= -->
  @foreach ($information_company as $item)
      <section id="topbar" class="d-flex align-items-center">
          <div class="container d-flex justify-content-center justify-content-md-between">
              <div class="contact-info d-flex align-items-center">
                  <i class="bi bi-envelope-fill"></i><a
                      href="mailto:waseintanperdana@gmail.com">{{ $item->company_email }}</a>
                  <i class="bi bi-phone-fill phone-icon"></i> {{ $item->company_number_phone }}
              </div>
              <div class="social-links d-none d-md-block">
                  <a href="{{ $item->company_facebook }}" class="facebook" target="_blank"><i
                          class="bi bi-facebook"></i></a>
                  <a href="{{ $item->company_instagram }}" class="instagram" target="_blank"><i
                          class="bi bi-instagram"></i></a>
                  <a href="{{ $item->company_linkedin }}" class="linkedin" target="_blank"><i
                          class="bi bi-linkedin"></i></i></a>
              </div>
          </div>
      </section>
  @endforeach
