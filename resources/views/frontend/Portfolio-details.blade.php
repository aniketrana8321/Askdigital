@include('front-end.header')



<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme default-navs">
        <!-- Single Slide Item with Portfolio Content -->
        <div class="slide-item">
            <div class="bg-image" style="background-image: url(''); background: linear-gradient(135deg, #6e48aa 0%, #9d50bb 100%);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="title">
                        The Success Journey with <span style="color: #00ff74;">Ask Digital Agency</span>
                    </h1>
                    <p style="color: white; margin-bottom: 30px; font-size: 1.1rem; line-height: 1.6;">
                        We specialize in crafting smart, innovative, and user-friendly websites tailored to meet your unique business goals. Whether you're looking to strengthen your online presence, boost engagement, or drive conversions, our expert team delivers solutions that bring your vision to life.
                    </p>
                    <div class="btn-box">
                        <a href="https://www.upwork.com/freelancers/~0120c7b1d5488c2679" class="theme-btn btn-style-one hover-light">
                            <span class="btn-title">Hire us on Upwork</span>
                        </a>

                        <a href="https://askdigitalagency.com/contact-us" class="theme-btn btn-style-one hover-light" style="background: rgba(255,255,255,0.2); margin-left: 15px;">
                            <span class="btn-title">Discuss Your Project</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Static Banner Section -->

<div class="tabs-container">
  <!-- Tab Headers -->
  <div class="tabs-header">
    @foreach($categories as $key => $category)
      <button class="tab-btn {{ $loop->first ? 'active' : '' }}" data-tab="category-{{ $key }}">
        {{ $category->name }}
      </button>
    @endforeach
  </div>

  <!-- Tab Contents -->
  @foreach($categories as $key => $category)
    <div class="tab-content {{ $loop->first ? 'active' : '' }}" id="category-{{ $key }}">
      <div class="tab-images">
        @forelse($category->portfolios as $portfolio)
          <div class="image-container" onclick="openModal('{{ asset('storage/' . $portfolio->photo) }}', '{{ $portfolio->title }}')">
            <img src="{{ asset('storage/' . $portfolio->photo) }}" alt="{{ $portfolio->title }}">
            <div class="image-title">{{ $portfolio->title }}</div>
          </div>
        @empty
          <p>No portfolios found in this category.</p>
        @endforelse
      </div>
    </div>
  @endforeach
</div>

<!-- ✅ Modal -->
<div id="imageModal" class="modal">
  <span class="close-btn" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="fullImage">
  <div id="caption"></div>
</div>

<style>/* Tabs and Images */
.tabs-container {
  max-width: 1200px;
  margin: 26px auto;
  font-family: Arial, sans-serif;
}

.tabs-header {
  display: flex;
  border-bottom: 2px solid #ddd;
  margin-bottom: 20px;
  justify-content: center;
}

.tab-btn {
  padding: 12px 24px;
  background: none;
  border: none;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  color: #555;
  transition: all 0.3s;
  text-transform: uppercase;
}

.tab-btn.active {
  color: #2c83eb;
  border-bottom: 3px solid #2c83eb;
}

.tab-content {
  display: none;
  padding: 20px;
}

.tab-content.active {
  display: block;
}

.tab-images {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.image-container {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: all 0.3s;
  cursor: pointer;
}

.image-container img {
  width: 100%;
  height: 250px;  /* Cropped height */
  object-fit: cover;
  transition: all 0.5s ease;
}

.image-title {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.7);
  color: white;
  padding: 15px;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  transition: all 0.3s;
}

.image-container:hover .image-title {
  background: rgba(40,120,220,0.9);
}

/* ✅ Modal Styling */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  padding: 36px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.9);
  transition: all 0.5s;
}

.modal-content {
  display: block;
  margin: auto;
  max-width: 80%;
  /*max-height: 90%;*/
  transition: all 0.5s;
}

.close-btn {
  position: absolute;
  top: 15px;
  right: 25px;
  color: white;
  font-size: 35px;
  font-weight: bold;
  cursor: pointer;
}

#caption {
  color: #ccc;
  text-align: center;
  padding: 10px;
  font-size: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .tabs-header {
    flex-direction: column;
  }
  
  .tab-images {
    grid-template-columns: 1fr;
  }
}
</style>

<script>  
// Tab Functionality
document.querySelectorAll('.tab-btn').forEach(button => {
  button.addEventListener('click', () => {
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    
    button.classList.add('active');
    document.getElementById(button.dataset.tab).classList.add('active');
  });
});

// ✅ Open Modal Function
function openModal(src, title) {
  const modal = document.getElementById('imageModal');
  const modalImg = document.getElementById('fullImage');
  const captionText = document.getElementById('caption');

  modal.style.display = 'block';
  modalImg.src = src;
  captionText.innerHTML = title;
}

// ✅ Close Modal Function
function closeModal() {
  const modal = document.getElementById('imageModal');
  modal.style.display = 'none';
}

</script>


@include('front-end.footer')
