<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('output_date'))
{
    /**
     * menghasilkan string tanggal dalam format d-M-Y H:i:s dalam Bahasa Indonesia
     * @param  string  $date_string   dalam format Y-m-d atau Y-m-d H:i:s
     * @param  boolean $include_time  FALSE jika tidak ingin menghasilkan format waktu H:i:s, TRUE jika ingin sebaliknya
     * @return string               dalam format d-M-Y H:i:s Bahasa Indonesia
     */
    function output_date($date_string, $include_time = FALSE)
    {
        if (empty($date_string) || count(explode("-", $date_string)) <= 1) {
            return $date_string;
        }

        $waktu = '';

        if (count(explode(" ", $date_string)) >= 2) {
            $tanggal = explode(" ", $date_string);

            $date_string = reset($tanggal);
            $waktu       = next($tanggal);
        }

        $month = array(
            '01' => 'Januari' ,
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );
        $date    = explode("-", $date_string);

        $tanggal = (!empty($date[2]) && $date[2] != '00') ? $date[2] : '';
        $bulan   = (!empty($date[1]) && !empty($month[$date[1]])) ? $month[$date[1]] : '';
        $tahun   = (!empty($date[0]) && $date[0] != '00000') ? $date[0] : '';

        $output  = array($tanggal, $bulan, $tahun);

        if ($include_time) {
            $output  = array($tanggal, $bulan, $tahun, $waktu);
        }

        return implode(" ", $output);
    }
}



if ( ! function_exists('input_date'))
{
    /**
     * menghasilkan string tanggal Y-m-d atau Y-m-d H:i:s untuk diinput ke database
     * @param  string $date_string    tanggal dalam format d-M-Y ataud-M-Y H:i:s Bahasa Indonesia
     * @param  boolean $include_time  FALSE jika tidak ingin menghasilkan format waktu H:i:s, TRUE jika ingin sebaliknya
     * @return string                 tanggal dalam format Y-m-d atau Y-m-d H:i:s
     */
    function input_date($date_string, $include_time = FALSE)
    {
        if (empty($date_string) || count(explode(" ", $date_string)) <= 1) {
            return $date_string;
        }

        $month = array(
            'Januari'  => '01',
            'Februari' => '02',
            'Maret'    => '03',
            'April'    => '04',
            'Mei'      => '05',
            'Juni'     => '06',
            'Juli'     => '07',
            'Agustus'  => '08',
            'September' => '09',
            'Oktober'   => '10',
            'November' => '11',
            'Desember' => '12',
        );

        $waktu = '';

        if (count(explode(" ", $date_string)) >= 4) {
            $tanggal = explode(" ", $date_string);
            $waktu   = end($tanggal);
        }

        $date = explode(" ", $date_string);

        $tanggal = array($date[2], $month[$date[1]], $date[0]);

        if ($include_time) {
            $tanggal = array($date[2], $month[$date[1]], $date[0] . ' ' . $waktu);
        }

        return implode("-", $tanggal);
    }
}
