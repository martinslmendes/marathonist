<?php

namespace App;

enum SeriesStatus: int
{
    case ONGOING = 0;
    case RENEWED = 1;
    case FINISHED = 2;
    case CANCELLED = 3;
}
