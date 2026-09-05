# Knowledge Hub — Design Rules

## 1. Design Direction

Tema utama:

**Clean Minimal Workspace**

Karakter:

* Clean
* Minimal
* Calm
* Focused
* Structured
* Professional

Prinsip utama:

> Informasi dan usability lebih penting daripada dekorasi.

Desain harus terasa seperti aplikasi produktivitas yang rapi, ringan, dan nyaman digunakan.

---

# 2. Frame

Mulai dengan desain Desktop.

Rekomendasi awal:

* Desktop Frame: **1440 px**

Responsive dan Mobile dapat dikerjakan setelah desain desktop utama stabil.

---

# 3. Layout

Gunakan struktur layout yang konsisten.

Struktur utama:

* Navigation
* Main Content
* Page Header
* Page Content

Main content sebaiknya memiliki:

* Hierarchy yang jelas
* Whitespace yang cukup
* Alignment yang konsisten

---

# 4. Layout Grid

Gunakan grid sebagai panduan layout.

Rekomendasi awal:

* 12 Columns
* Gutter: sekitar 24 px
* Margin: sekitar 80–120 px

Grid dapat disesuaikan sesuai kebutuhan aplikasi.

---

# 5. Typography

Gunakan maksimal satu font family utama untuk interface.

Karakter font:

* Clean
* Readable
* Modern
* Cocok untuk web application

Gunakan hierarchy sederhana:

* Page Title
* Section Title
* Content Title
* Body Text
* Secondary Text
* Small Text

Jangan menggunakan terlalu banyak ukuran dan weight.

---

# 6. Color System

Gunakan warna secara minimal dan terstruktur.

Minimal memiliki:

### Neutral

* Background
* Surface
* Primary Text
* Secondary Text
* Border

### Accent

Digunakan untuk:

* Primary Button
* Active Navigation
* Important Link
* Focus State
* Selected State

Prinsip:

> Accent color digunakan untuk memberikan fokus, bukan untuk mewarnai seluruh interface.

---

# 7. Spacing System

Gunakan spacing yang konsisten.

Base spacing:

* 4 px
* 8 px
* 12 px
* 16 px
* 24 px
* 32 px
* 48 px
* 64 px

Hindari nilai spacing acak.

Prinsip:

> Gunakan spacing dari sistem yang sudah ditentukan sebelum membuat nilai baru.

---

# 8. Border Radius

Gunakan sedikit variasi radius.

Rekomendasi:

* Small: 6 px
* Medium: 8 px
* Large: 12 px

Gunakan secara konsisten.

---

# 9. Border

Gunakan border sebagai pemisah utama antar elemen.

Karakter:

* Tipis
* Halus
* Tidak terlalu kontras

Border digunakan untuk:

* Input
* Card
* Section separator
* Container tertentu

---

# 10. Shadow

Gunakan shadow secara minimal.

Prinsip:

* Card tidak membutuhkan shadow berat
* Border lebih diutamakan untuk pemisahan
* Shadow digunakan untuk elevasi

Contoh penggunaan:

* Dropdown
* Modal
* Floating element

Hindari shadow yang terlalu kuat.

---

# 11. Buttons

Gunakan button hanya untuk action.

Minimal memiliki:

* Primary
* Secondary
* Danger

State:

* Default
* Hover
* Disabled

Prinsip:

> Satu halaman sebaiknya memiliki visual priority yang jelas untuk primary action.

---

# 12. Inputs & Forms

Gunakan tampilan input yang sederhana dan konsisten.

State minimal:

* Default
* Focus
* Error
* Disabled

Prinsip:

* Label jelas
* Error mudah terlihat
* Spacing antar field konsisten
* Input tidak terlalu dekoratif

---

# 13. Navigation

Navigation harus:

* Mudah dipahami
* Konsisten
* Tidak terlalu banyak pilihan
* Memiliki active state yang jelas

Setiap halaman utama harus memiliki indikator lokasi yang sedang aktif.

---

# 14. Cards & Containers

Gunakan card hanya ketika benar-benar membantu mengelompokkan informasi.

Card harus:

* Memiliki hierarchy jelas
* Tidak terlalu banyak dekorasi
* Memiliki padding konsisten

Hindari:

* Terlalu banyak card kecil
* Card di dalam card tanpa alasan
* Shadow berlebihan

---

# 15. Whitespace

Jangan takut menggunakan ruang kosong.

Whitespace digunakan untuk:

* Memisahkan informasi
* Membuat hierarchy
* Meningkatkan readability
* Mengurangi visual clutter

Prinsip:

> Jika sebuah halaman terasa ramai, pertimbangkan memperbaiki spacing sebelum menambahkan elemen baru.

---

# 16. Visual Hierarchy

Gunakan hierarchy yang jelas.

Prioritas visual:

1. Page Title
2. Primary Action
3. Main Content
4. Secondary Information
5. Supporting Information

Gunakan kombinasi:

* Typography
* Size
* Weight
* Spacing
* Contrast

untuk membangun hierarchy.

Jangan hanya mengandalkan warna.

---

# 17. Icons

Gunakan satu icon library secara konsisten.

Icon harus:

* Mudah dipahami
* Memiliki ukuran konsisten
* Digunakan sebagai pendukung, bukan dekorasi

Jangan mencampurkan berbagai style icon.

---

# 18. Components

Buat component untuk elemen yang digunakan berulang.

Contoh:

* Button
* Input
* Textarea
* Navigation Item
* Card
* Alert

Jangan membuat component untuk fitur yang belum digunakan.

---

# 19. Consistency Rule

Sebelum membuat elemen baru, tanyakan:

> Apakah elemen ini sudah memiliki pola yang bisa digunakan kembali?

Jika ada, gunakan pola tersebut.

Hindari membuat style baru untuk masalah yang sebenarnya sudah memiliki solusi desain.

---

# 20. Complexity Rule

Jika ada dua pilihan:

* Satu lebih sederhana dan jelas
* Satu lebih dekoratif tetapi tidak menambah usability

Pilih yang lebih sederhana dan jelas.

---

# Quick Design Checklist

Sebelum menyelesaikan sebuah halaman, periksa:

* Apakah hierarchy sudah jelas?
* Apakah spacing konsisten?
* Apakah alignment konsisten?
* Apakah primary action terlihat jelas?
* Apakah terlalu banyak warna?
* Apakah terlalu banyak card?
* Apakah informasi mudah di-scan?
* Apakah navigation jelas?
* Apakah elemen yang sama memiliki style yang sama?
* Apakah ada dekorasi yang sebenarnya tidak diperlukan?
