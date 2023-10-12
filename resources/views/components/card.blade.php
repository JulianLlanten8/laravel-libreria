@props(['title', 'text'])

<div class="card" style="width: 18rem;">
  <img
    src="https://c0.klipartz.com/pngpicture/730/970/gratis-png-jiraiya-de-naruto-jiraiya-gamabunta-tsunade-orochimaru-naruto-uzumaki-naruto-thumbnail.png"
    class="card-img-top" alt="viejo pervertido">
  <div class="card-body">
    <h5 {{ $attributes->merge(['class' => 'card-title']) }}>
      {{ $title }}
    </h5>
    <p {{ $attributes->merge(['class' => 'card-text']) }}>
      {{ $text }}
    </p>

    <x-button type="submit" color="primary" message="Ver mas" />
    <a class="btn btn-link" role="button" href="https://www.youtube.com/watch?v=FyZtOh33W8Y" target="_blank">Video</a>
  </div>
</div>
