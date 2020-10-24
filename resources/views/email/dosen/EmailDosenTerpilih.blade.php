@component('mail::message')

<div style="margin: -40px; border-radius: 15px 15px 15px 15px; box-shadow: 0px 0px 29px #d3d3d3; mso-line-height-alt:20px">
    <table cellpadding="0" cellspacing="0" class="nl-container tbl" role="presentation" valign="top" width="100%">
        <tbody>
            <tr style="vertical-align: top;" valign="top">
                <td style=" word-break: break-word;vertical-align: top;" valign="top">
                    <div style="background-color: transparent;overflow: hidden; background: rgb(255,255,255);background: linear-gradient(7deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 53%, rgba(23,190,187,1) 100%); border-radius: 15px 15px 0px 0px;">
                        <div style="padding-top:5px; padding-bottom:5px; padding-right: 20px; padding-left: 20px;">
                            <div style="font-size: 12px; color: #17bebb; mso-line-height-alt: 14px;">
                                <p style="font-size: 24px; word-break: break-word; mso-line-height-alt: 29px; margin: 0;text-shadow: 2px 2px #EFEFEF; margin-top:20px;margin-bottom:20px;margin-left:10px">
                                    <!-- JUDUL DISINI  -->
                                    <strong>{{ $mailData['title'] }}</strong>
                                    <!-- BATAS JUDUL -->
                                </p>
                            </div>
                            <hr style="border-color:	hsl(0, 0%, 98%)">
                        </div>
                    </div>
                    <div style="background-color: #fff;overflow: hidden;">
                        <div style="padding-top:5px; padding-bottom:5px; padding-right: 30px; padding-left: 30px;">
                            <div style="color:#132F40;padding:10px 10px 10px 10px;">
                                <div style="font-size: 12px; mso-line-height-alt: 14px;">
                                    <p style="font-size: 22px; word-break: break-word; mso-line-height-alt: 26px; margin: 0;">
                                        <!-- SAPAAN PENERIMA -->
                                        <p style="font-size: 22px; word-break: break-word; mso-line-height-alt: 26px; margin: 0;">
                                            <!-- SAPAAN PENERIMA -->
                                            <span style="font-size: 20px;">Halo <strong>{{ $mailData['nama_dosen'] }}</strong>,</span>
                                            <!-- BATAS SAPAAN -->
                                        </p>
                                        NIPY: {{ $mailData['nipy'] }}
                                        <!-- BATAS SAPAAN -->
                                    </p>
                                </div>
                            </div>
                            <div style="color:#555555;line-height:1.5;padding-top:5px;padding-right:10px;padding-bottom:0px;padding-left:10px;">
                                <div style="font-size: 12px; line-height: 1.5; mso-line-height-alt: 18px;">
                                    <p style="font-size: 14px; line-height: 1.5; word-break: break-word; mso-line-height-alt: 21px; padding-top:10px">
                                        Anda <b>{{ $mailData['keputusan'] }}</b> untuk mengerjakan topik tugas akhir berikut:<br>
                                        <table style="padding-left:10px; padding-right:10px">
                                            <tr>
                                                <td>
                                                    Judul
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    {{ $mailData['judul_topik'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Mahasiswa
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    {{ $mailData['nama_mahasiswa'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    NIM
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    {{ $mailData['nim'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bidang</td>
                                                <td>:</td>
                                                <td>{{ $mailData['topik_bidang'] }}</td>
                                            </tr>
                                        </table>
                                    </p>
                                </div>
                            </div>
                            <div style="color:#555555;padding-top:20px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                                <div style="font-size: 12px; mso-line-height-alt: 14px;">
                                    <p style="font-size: 14px; word-break: break-word; mso-line-height-alt: 17px; margin: 0; margin-top:0px">
                                        Untuk informasi lebih lanjut, hubungi Pengelola Siatif.
                                    </p>
                                    <p style="font-size: 14px; word-break: break-word; mso-line-height-alt: 17px; margin: 0;margin-bottom:30px">
                                        Semoga Harimu Menyenangkan! &#128522 <br>
                                        Pengelola Siatif.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="border-radius: 0px 15px 15px 15px; background: rgb(255,255,255);background: linear-gradient(187deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 53%, rgba(23,190,187,1) 100%);">
                        <div style="padding-top:5px; padding-bottom:5px; padding-right: 20px; padding-left: 20px;">
                            <div style="font-size: 12px; color: #17bebb; mso-line-height-alt: 14px;">
                                <p style="font-size: 24px; word-break: break-word; mso-line-height-alt: 29px; margin: 0;text-shadow: 2px 2px #EFEFEF; margin-top:20px;margin-bottom:50px;margin-left:auto">
                                </p>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endcomponent