<?php

namespace lpagedev\Helpers;

class MathHelper
{

  /**
   * Rotate Point: rotates a point array ['x'=>0,'y'=>0] around a specified center, if given.
   *
   * @param float[] $point
   * @param float $rotation
   * @param float[]|null $center
   *
   * @return float[]
   */
  public static function RotatePoint(array $point, float $rotation = 0, array $center = null) :array
  {

    /** @var float $rotation */
    /** @var float[] $point */
    /** @var float[] $center */
    if(is_null($center)){
      $center = ['x' => 0, 'y' => 0];
    }
    /** @var float $rotation */
    $rotation = floatval($rotation * ( pi() / 180.0 ));

    return [
      'x' => ( ( $point[ 'x' ] - $center[ 'x' ] ) * cos($rotation) + ( $point[ 'y' ] - $center[ 'y' ] ) * sin($rotation) ) + $center[ 'x' ],
      'y' => ( -( $point[ 'x' ] - $center[ 'x' ] ) * sin($rotation) + ( $point[ 'y' ] - $center[ 'y' ] ) * cos($rotation) ) + $center[ 'y' ],
    ];
  }

}
