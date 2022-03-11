  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
          @foreach ($information_company as $item)
              <img src="{{ $item->company_logo }}" class="img-fluid" style="width: 30rem;" alt="waseip">
          @endforeach
      </div>
  </section><!-- End Hero -->
