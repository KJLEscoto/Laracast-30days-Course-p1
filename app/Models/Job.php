<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
  public static function all(): array {
      return [
          [
              'id' => 1,
              'title' => 'programmer',
              'description' => 'This is programmer.',
              'salary' => '$12,000'
          ],
          [
              'id' => 2,
              'title' => 'teacher',
              'description' => 'This is teacher.',
              'salary' => '$10,000'
          ],
      ];
  }

  public static function find(int $id): array {
    $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

    if(! $job) {
      abort(404);
    }
    else {
      return $job;
    }
  }
};