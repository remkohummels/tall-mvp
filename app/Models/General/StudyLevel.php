<?php

namespace App\Models\General;

use App\Models\Traits\HasTranslations;
use App\Models\User\UserBio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\General\StudyLevel
 *
 * @property int $id
 * @property string $title
 * @property array|null $translated_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|UserBio[] $userBio
 * @property-read int|null $user_bio_count
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel whereTranslatedName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudyLevel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StudyLevel extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['translated_name'];
    protected $fillable = ['title','translated_name','description'];

    public function userBio(): HasMany
    {
        return $this->hasMany(UserBio::class);
    }
}
