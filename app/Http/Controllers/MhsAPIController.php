<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs =Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => "Data Berhasil Di tampilkan",
            'data' => $mhs
        ], 200);
    }


    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'succes' => true,
                'message' => 'Data successfully ditambahkan'
            ], 200);

        }
        else
        {

                return response()->json([
                    'succes' => false,
                    'message' => 'Data NOT successfully ditambahkan'
                ], 400);

        }

        }

        public function update($id, Request $request)
        {
            $mhs = Mahasiswa::find($id)->update
            ([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'gender' => $request->gender,
                'prodi' => $request->prodi,
                'minat' => $request->minat

            ]);

            if($mhs)
            {
                return response()->json([
                    'succes' => true,
                    'message' => 'Data successfully diubah'
                ], 400);
            }
            else
            {
                return response()->json([
                    'succes' => false,
                    'message' => 'Data NOT successfully diubah'
                ], 400);
            }

        }

        public function delete($id)
        {
            $mhs = Mahasiswa::find($id)->delete();

            if($mhs)
            {
                return response()->json([
                    'succes' => true,
                    'message' => 'Data Has Been Delete'
                ], 400);
            }
            else
            {
                return response()->json([
                    'succes' => true,
                    'message' => 'Data Failed to Delete'
                ], 400);
            }
        }
}