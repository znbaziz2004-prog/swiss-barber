<section class="kk-how-it-works">

    <div class="kk-how-bg-shape kk-how-bg-shape-1"></div>
    <div class="kk-how-bg-shape kk-how-bg-shape-2"></div>
    <div class="kk-how-bg-shape kk-how-bg-shape-3"></div>

    <div class="kk-how-inner">

        <div class="kk-how-heading">

            <span class="kk-how-kicker">
                {{ __('messages.simple_steps') }}
            </span>

            <h2>
                {{ __('messages.how_it_works') }}
            </h2>

            <p>
                {{ __('messages.how_it_works_description') }}<br>
                {{ __('messages.how_it_works_subtitle') }}
            </p>

        </div>

        <div class="kk-how-grid">

            <article class="kk-how-card">

                <div class="kk-how-number">01</div>

                <div class="kk-how-image">
                    <img
                        src="{{ asset('images/step-01.png') }}"
                        alt="{{ __('messages.find_your_barber') }}"
                    >
                </div>

                <div class="kk-how-content">
                    <h3>{{ __('messages.find_your_barber') }}</h3>
                    <p>{{ __('messages.find_your_barber_description') }}</p>
                </div>

            </article>

            <article class="kk-how-card">

                <div class="kk-how-number">02</div>

                <div class="kk-how-image">
                    <img
                        src="{{ asset('images/step-02.png') }}"
                        alt="{{ __('messages.make_appointment') }}"
                    >
                </div>

                <div class="kk-how-content">
                    <h3>{{ __('messages.make_appointment') }}</h3>
                    <p>{{ __('messages.make_appointment_description') }}</p>
                </div>

            </article>

            <article class="kk-how-card">

                <div class="kk-how-number">03</div>

                <div class="kk-how-image">
                    <img
                        src="{{ asset('images/step-03.png') }}"
                        alt="{{ __('messages.take_advantage') }}"
                    >
                </div>

                <div class="kk-how-content">
                    <h3>{{ __('messages.take_advantage') }}</h3>
                    <p>{{ __('messages.take_advantage_description') }}</p>
                </div>

            </article>

        </div>

    </div>

</section>