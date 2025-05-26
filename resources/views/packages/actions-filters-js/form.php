<script>
  document.addEventListener('DOMContentLoaded', function() {
    wpbones_add_action('button_click', function() {
      alert('Button clicked!');
    });
  });
</script>

<p>
  <button class="button button-primary" onclick="wpbones_do_action('button_click')">Click me</button>
</p>