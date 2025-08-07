{{-- Contoh penggunaan komponen alert --}}

{{-- Alert Success (sudah ada) --}}
@include('partials.alert.alert-success')

{{-- Alert Warning --}}
@include('partials.alert.alert-warning')

{{-- Alert Info --}}
@include('partials.alert.alert-info')

{{-- Alert Error --}}
@include('partials.alert.alert-error')

{{-- Alert dengan kustomisasi --}}
@include('partials.alert.alert-warning', [
    'title' => 'Peringatan Penting',
    'message' => 'Data yang Anda masukkan tidak valid. Silakan periksa kembali.',
    'showLink' => true,
    'linkText' => 'Lihat Detail',
    'linkUrl' => '/help/validation'
])

{{-- Alert Info dengan link --}}
@include('partials.alert.alert-info', [
    'title' => 'Informasi Update',
    'message' => 'Sistem telah diperbarui dengan fitur baru.',
    'showLink' => true,
    'linkText' => 'Baca Changelog',
    'linkUrl' => '/changelog'
])

{{-- Alert Error tanpa link --}}
@include('partials.alert.alert-error', [
    'title' => 'Terjadi Kesalahan',
    'message' => 'Gagal menyimpan data. Silakan coba lagi.',
    'showLink' => false
]) 