<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "transactions";
    protected $fillable = ['id_customer','id_media','id_service','id_purpose','id_purposevtwo','data','id_sub_categories','status', 'id_tujuankunjungan'];

    // public function Customer(){
    //     return $this->belongsTo(Customer::class);
    // }s
    public function Customer(){
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    /**
     * Get the user that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Media()
    {
        return $this->belongsTo(Media::class, 'id_media');
    }

    public function Service(){
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function Purpose(){
        return $this->belongsTo(Purpose::class, 'id_purpose');
    }
    public function Purposev2(){
        return $this->belongsTo(purposevolumetwo::class, 'id_purposevtwo');
    }

    public function SubCategory(){
        return $this->belongsTo(SubCategory::class, 'id_sub_categories');
    }

    public function Category(){
        return $this->belongsTo(Category::class, 'id_categories');
    }

    public function TujuanKunjungan(){
        return $this->belongsTo(TujuanKunjungan::class, 'id_tujuankunjungan');
    }

    // public function Feedback(){
    //     return $this->belongsTo(Feedback::class, 'service' , 'facility', 'dataqualities');
    // }

    /**
     * Declaring One to One Relationship
     * 1 Transaction has 1 Feedback
     */

    public function Feedback(){
        return $this->hasOne(Feedback::class, 'id_transaction');
     }

    public static function getTransaction(){
        $records = DB::table('transactions')
        ->join('customer', 'transactions.id_customer', '=', 'customer.id')
        ->join('media', 'transactions.id_media', '=', 'media.id')
        ->join('service', 'transactions.id_service', '=', 'service.id')
        ->join('purpose', 'transactions.id_purpose', '=', 'purpose.id')
        ->join('purposevolumetwos', 'transactions.id_purposevtwo', '=', 'purposevolumetwos.id')
        ->join('sub_categories', 'transactions.id_sub_categories', '=', 'sub_categories.id')
        -join('tujuankunjungan', 'transactions.id_tujuankunjungan', '=', 'tujuankunjungan.id')
        ->select('customer.name', 'media.media_type', 'service.service_type','purpose.purpose_type','sub_categories.sub_categories_type', 'tujuankunjungan_type')
        ->get()->toArray();

        return $records;
    }

}
