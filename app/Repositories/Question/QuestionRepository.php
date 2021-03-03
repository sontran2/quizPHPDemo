<?php
namespace App\Repositories\Question;

use App\Repositories\BaseRepository;

class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Questions::class;
    }
}
