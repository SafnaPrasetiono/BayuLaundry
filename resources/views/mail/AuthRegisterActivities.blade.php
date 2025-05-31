<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="fr-no-selection" style="padding: 0;">
    <table style="border: none;background:white; border-collapse:collapse; font-family: 'Nunito', sans-serif;"
        align="center" width="576">
        <tbody>
            <tr>
                <td>

                    <table style="border: none;">
                        <tbody style="background-color: #f0f9f0">
                            <tr>
                                <td style="display:block; padding: 12px; background-color: #f0f9f0">

                                    <div style="display:block; padding: 12px 16px 32px 16px; line-height: 1rem;">
                                        <h1 style="margin-bottom: 0px; color: #4e874e;">
                                            <span style="color: #274127;">L</span>aundry<span style="color: #274127;">Ku</span>
                                        </h1>
                                        <p style="margin-bottom: 0px;">Selamat datang di aplikasi laundryku</p>
                                    </div>

                                    <div style="display:block; padding: 12px 16px 32px 16px; background-color: #ffffff">
                                        <p style="text-align: justify;">
                                            Hi {{$data->username}},
                                        </p>
                                        <p style="text-align: justify;">
                                            Terima kasih atas kepercayaan Anda telah mendaftar member di aplikasi laundryku
                                        </p>
                                        <p style="text-align: justify;">Berikut informasi Akun Anda:</p>
                                        <div style="line-height: 1rem;">
                                            <p style="display: flex;justify-content:center;">
                                                <span style="width: 120px;">Username</span>: 
                                                <span style="width: 240px;">{{ $data->username }}</span>
                                            </p>
                                            <p style="display: flex;justify-content:center;">
                                                <span style="width: 120px;">Email </span>: 
                                                <span style="width: 240px;">{{ $data->email }}</span>
                                            </p>
                                        </div>
                                        <p style="text-align: justify;">
                                            Sebelum anda menggunakan akun tersebut, anda dapat menyelesaikan proses pendaftaran dengan mengklik tombol verifikasi di bawah ini:
                                        </p>
                                        <div style="box-sizing: border-box;display: block!important;margin-top: 2.5rem!important;margin-bottom: 2.5rem!important;text-align: center!important;">
                                            <a href="{{ route('signup.activasi', ['mail' => $data->email, 'vkey' => $data->vKey]) }}"
                                                class="btn-aktivasi"
                                                style="box-sizing: border-box;border:1px solid #cedece;color: #000;text-decoration: none!important;background-color: #f0f9f0;padding: 1rem 3rem 1rem 3rem; font-size: 16px;border-radius: 8px;cursor: pointer;">
                                                Aktivasi Akun
                                            </a>
                                        </div>
                                        <div style="border: 1px solid #cedece;box-sizing: border-box;position: relative;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border-radius: .25rem;margin-bottom: 1rem!important;">
                                            <div
                                                style="box-sizing: border-box;-ms-flex: 1 1 auto;flex: 1 1 auto;min-height: 1px;padding: 1.25rem;color: #343a40!important;">
                                                <p style="text-align:justify;font-size:11pt;font-family:Arial;margin:0pt;margin-bottom:8px;vertical-align:top;">
                                                    Jika tombol tidak berfungsi, salin tautan berikut ini:
                                                </p>
                                                <a href="{{ route('signup.activasi', ['mail' => $data->email, 'vkey' => $data->vKey]) }}"
                                                    class="cart-text"
                                                    style="box-sizing: border-box;color: #007bff;text-decoration: underline;background-color: transparent;">
                                                    {{ route('signup.activasi', ['mail' => $data->email, 'vkey' => $data->vKey]) }}
                                                </a>
                                            </div>
                                        </div>
                                        <p style="text-align: justify;">
                                            Harap lakukan aktivasi akun anda dalam tempo 12 jam, jika tidak melakukan aktivasi maka pendaftaran akan dibatalkan dan Anda harus mendaftar lagi.
                                        </p>
                                        <p style="text-align: justify;">
                                            Informasi lebih lanjut terkat aktivasi laundryku, silakan menghubungi care kami melalui nomor telepon (021) 1500 456 atau email
                                            <a href="mailto:flossprint71@gmail.com.">flossprint71@gmail.com.</a>
                                        </p>
                                        <br>
                                        <br>
                                        <div style="line-height: 0.5rem;">
                                            <p style="margin-bottom: 0px;">Hormat Kami,</p>
                                            <p style="margin-bottom: 0px;">LaundryKu.com</p>
                                        </div>
                                    </div>

                                    <div style="display:block; padding: 12px 16px 32px 16px; background-color: #f0f9f0">
                                        <p>
                                            <strong>Informasi Penting:</strong>
                                        </p>
                                        <ol
                                            style="margin: 0px; padding-left: 18px; padding-right: 18px;text-align: justify; font-size:small;">
                                            <li>Data e-mail para nasabah yang kami miliki saat ini berasal dari Formulir
                                                Pengajuan Asuransi beserta perubahannya (jika ada) yang pernah Anda isi
                                                sebelumnya dan telah terdaftar di dalam database kami.</li>
                                            <li>Pastikan untuk melakukan pengkinian data jika terjadi perubahan pada
                                                Polis Anda.</li>
                                            <li>Laundryku tidak berkewajiban untuk meneliti, menyelidiki keabsahan atau
                                                kewenangan serta ketepatan penerima email, dimana hal ini merupakan
                                                tanggung jawab Pemegang Polis</li>
                                            <li>Jika Anda bukan Pemegang Polis Laundryku yang namanya tercantum di atas,
                                                mohon untuk tidak menggunakan, memanfaatkan, menyebarkan,
                                                mendistribusikan atau menggandakan email ini serta seluruh lampirannya
                                                dan segera hapus pesan ini dari sistem Anda.</li>
                                            <li>Untuk pengalaman yang lebih optimal, akses Softcopy Polis Anda dengan
                                                Adobe Acrobat Reader terbaru.</li>
                                            <li>Email ini tidak untuk dibalas (no reply).</li>
                                        </ol>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td
                                    style="display:block; padding-left: 14px; padding-right: 14px; background-color: #929292">
                                    <p style="text-align: center; color: #ffffff;">
                                        <small style="display: block;">
                                            <strong>Laundryku berizin dan diawasi Otoritas Jasa Keuangan (OJK)</strong>
                                        </small>
                                        <small style="display: block;">
                                            <a href="https://www.laundryku.com">www.laundryku.com</a>
                                        </small>
                                    </p>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>