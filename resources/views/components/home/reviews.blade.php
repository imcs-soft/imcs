@push('styles')
    <style>
        @keyframes fadeIn {
            from { opacity: 0.4; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-fade {
            animation: fadeIn 0.8s ease-in-out;
        }
        .testimonial-card {
            transition: all 0.5s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-card-entry:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
@endpush

<div class="max-w-7xl w-full mx-auto py-16 px-4">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Nos Recomiendan los mejores</h2>
        <div class="w-20 h-1 bg-indigo-600 mx-auto mb-6"></div>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Contamos con las mejores reseñas sobre nuestros cursos.</p>
    </div>

    <div class="relative">

        <!-- Carousel Container -->
        <div id="carousel" class="overflow-hidden relative py-8">
            <div id="testimonial-track" class="flex transition-transform duration-500 ease-in-out">
               @foreach($reviews as $review)
                    <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-4 animate-fade">
                        <div class="p-8 testimonial-card-entry rounded-xl shadow-lg h-full border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="flex space-x-1 text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-6 italic">"{{$review->content}}"</p>
                            <div class="flex items-center align-bottom">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&h=200&q=80"
                                     alt="Sarah Johnson"
                                     class="w-14 h-14 rounded-full object-cover mr-4 border-2 border-indigo-100">
                                <div>
                                    <h4 class="font-semibold text-gray-800">{{ $review->user->name }}.</h4>
                                    <p class="text-gray-500 text-sm"></p> <!-- opcional --->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Indicators -->
        <div class="flex justify-center mt-12 space-x-3">

        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('testimonial-track');
            const cards = document.querySelectorAll('.testimonial-card');

            let currentIndex = 0;
            const cardWidth = cards[0].offsetWidth;
            const visibleCards = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const totalCards = cards.length;
            let autoSlideInterval;

            // Initialize carousel
            function updateCarousel() {
                const offset = -currentIndex * cardWidth;
                track.style.transform = `translateX(${offset}px)`;

                // Animate cards
                cards.forEach(card => {
                    card.classList.remove('animate-fade');
                    void card.offsetWidth; // Trigger reflow
                    card.classList.add('animate-fade');
                });
            }

            // Next slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % (totalCards - visibleCards + 1);
                updateCarousel();
            }

            // Previous slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + (totalCards - visibleCards + 1)) % (totalCards - visibleCards + 1);
                updateCarousel();
            }

            // Auto slide
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 5000);
            }

            // Reset auto slide timer
            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            // Pause on hover
            const carousel = document.getElementById('carousel');
            carousel.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });

            carousel.addEventListener('mouseleave', startAutoSlide);

            // Responsive adjustments
            window.addEventListener('resize', () => {
                const newVisibleCards = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
                if (newVisibleCards !== visibleCards) {
                    currentIndex = 0;
                    updateCarousel();
                }
            });

            // Initialize
            updateCarousel();
            startAutoSlide();
        });
    </script>
@endpush
