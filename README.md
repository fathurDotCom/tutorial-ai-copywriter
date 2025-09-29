# Tutorial AI Copywriter

Aplikasi ini menggunakan API dari OpenAI untuk menghasilkan copywriting produk secara otomatis.

## Penting: Konfigurasi API Key

Agar aplikasi dapat berjalan dengan baik, Anda **wajib** mengisi API Key OpenAI pada file `.env`:

1. Buka file `.env` di root project.
2. Temukan baris berikut:
   ```
   OPENAI_API_KEY=
   ```
3. Isi dengan API Key Anda dari OpenAI, contoh:
   ```
   OPENAI_API_KEY=sk-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
   ```

Tanpa API Key yang valid, fitur AI copywriter tidak akan berfungsi.

## Cara Mendapatkan API Key

- Daftar dan login ke [OpenAI](https://platform.openai.com/)
- Buat API Key di dashboard
- Salin dan tempel ke `.env` seperti instruksi di atas

## Jalankan Aplikasi

Setelah mengisi API Key, Anda dapat menjalankan aplikasi dengan perintah berikut:

```sh
composer install
npm install
npm run dev
php artisan serve
```

Akses aplikasi di [http://localhost:8000](http://localhost:8000).

---
**Catatan:** Jangan membagikan API Key Anda ke publik.