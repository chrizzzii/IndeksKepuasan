<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan konvensi, tambahkan deklarasi di bawah
    protected $table = 'mahasiswa';
    // Menentukan kolom primary key
    protected $primaryKey = 'mahasiswa_id';
    public $timestamps = false;    // Menonaktifkan fitur timestamp Eloquent

    // Jika Anda ingin mengizinkan kolom tertentu untuk diisi secara massal
    protected $fillable = [
        'status',
        'no_responden',
        'nama',
        'email',
        'nim',
        'usia',
        'jeniskelamin',
        'alamat',
        'nomor_telepon',
        'saranmasukkan',
        'password',
        'prodi',
        'role',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'p14',
        'p15',
        'p16',
        'p17',
        'p18',
        'p19',
        'p20',
        'p21',
        'p22',
        'p23',
        'p24',
        'p25',
        'p26',
        'p27',
        'p28',
        'p29',
        'p30',
        'p31',
        'p32',
        'p33',
        'p34',
        'p35',
        'p36',
        'p37',
        'p38',
        'p39',
        'p40',
        'p41',
        'p42',
        'p43',
        'p44',
        'p45',
        'p46',
        'p47',
        'p48',
        'p49',
        'p50',
        'p51',
        'p52',
        'p53',
        'p54',
        'p55',
        'p56',
        'p57',
        'p58',
        'p59',
        'p60',
        'p61',
        'p62',
        'p63',
        'p64',
        'p65',
        'p66',
        'p67',
        'p68',
        'p69',
        'p70',
        'p71',
        'p72',
        'p73',
        'p74',
        'p75',
        'p76',
        'p77',
        'p78',
        'p79',
        'p80',
        'p81',
        'p82',
        'p83',
        'p84',
        'p85',
        'p86',
        'p87',
        'p88',
        'p89',
        'p90',
        'u1',
        'u2',
        'u3',
        'u4',
        'u5',
        'u6',
        'u7',
        'u8',
        'u9',
    ];
}
