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
              'salary' => '$12,000',
              'image' => 'https://www.shutterstock.com/image-photo/diverse-office-programmer-working-on-600nw-2079730714.jpg'
          ],
          [
              'id' => 2,
              'title' => 'designer',
              'description' => 'This is designer.',
              'salary' => '$10,000',
              'image' => 'https://www.training.com.au/wp-content/uploads/Web-designer-1.jpeg'
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