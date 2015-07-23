﻿// Generated by Xamasoft JSON Class Generator
// http://www.xamasoft.com/json-class-generator

using System;
using System.Collections.Generic;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

namespace GPSCrypto
{

    public partial class ListData
    {

        [JsonProperty("UserName")]
        public string UserName { get; set; }

        [JsonProperty("Mobile")]
        public string Mobile { get; set; }

        [JsonProperty("mess_id")]
        public string MessId { get; set; }
    }
    public class ListDataItems
    {
        public string UserName { get; set; }
        public string Mobile { get; set; }
        public string MessId { get; set; }
        public ListDataItems(String User,String Id,String mess)
        {
            UserName = User;
            Mobile = Id;
            MessId = mess;
        }
    }

}
