<div class="w-full max-w-md">

  <div id="uploadContainer"
  class="relative flex flex-col items-center justify-center gap-4
  border-2 border-dashed rounded-xl
  border-purple-500/50
  p-8 cursor-pointer
  text-center
  hover:border-pink-500 transition-all"
>

    <!-- PREVIEW -->
    <div class="relative">
      <img id="preview" class="w-[120px] h-[120px] hidden object-cover rounded-lg">

      <button type="button" id="removeBtn"
        class="hidden absolute -top-2 -right-2 bg-pink-500 text-white w-6 h-6 rounded-full text-xs flex items-center justify-center">
        ✕
      </button>
    </div>

    <!-- ICON -->
    <img id="icon" src="/img/upload.png" class="w-[100px] h-[100px]">

    <!-- TEXT -->
    <p id="text" class="font-semibold text-[var(--color-text)]">
      Unggah file mu di sini
    </p>

    <!-- BUTTON -->
    @include("components/admin/button", [
      'type' => 'button',
      'id' => 'uploadBtn',
      'slot' => 'Unggah'
    ])

  </div>

  <!-- INPUT DIPISAH -->
  <input id="fileInput" name="profile_image" type="file" class="hidden" accept="image/*">

</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {

  const input = document.getElementById('fileInput')
  const preview = document.getElementById('preview')
  const icon = document.getElementById('icon')
  const text = document.getElementById('text')
  const btn = document.getElementById('uploadBtn')
  const removeBtn = document.getElementById('removeBtn')
  const container = document.getElementById('uploadContainer')

  // klik area container
  container.addEventListener('click', (e) => {
  if (e.target.id === 'uploadContainer') {
    input.click()
  }
})

  // klik tombol upload (biar gak double trigger)
  btn.addEventListener('click', (e) => {
    e.stopPropagation()
    input.click()
  })

  // saat pilih file
  input.addEventListener('change', function() {
    const file = this.files[0]

    if (file) {
      const reader = new FileReader()

      reader.onload = function(e) {
        preview.src = e.target.result
        preview.classList.remove('hidden')
        removeBtn.classList.remove('hidden')

        icon.classList.add('hidden')
        text.classList.add('hidden')
        btn.classList.add('hidden')
      }

      reader.readAsDataURL(file)
    }
  })

  // tombol hapus
  removeBtn.addEventListener('click', function(e) {
    e.stopPropagation() // biar gak buka file lagi
    e.preventDefault()

    input.value = ''

    preview.src = ''
    preview.classList.add('hidden')
    removeBtn.classList.add('hidden')

    icon.classList.remove('hidden')
    text.classList.remove('hidden')
    btn.classList.remove('hidden')
  })

})
</script>
@endpush