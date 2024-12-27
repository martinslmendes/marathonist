<?php

namespace App;

enum SeriesStatus: int
{
    case Ongoing = 0;
    case Renewed = 1;
    case Finished = 2;
    case Cancelled = 3;
}
