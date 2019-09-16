# https://ruby-doc.org/stdlib-2.4.0/libdoc/digest/rdoc/Digest/MD5.html

require 'digest'

# Compute a complete digest
Digest::MD5.hexdigest 'abc'      #=> "90015098..."

# Compute digest by chunks
md5 = Digest::MD5.new               # =>#<Digest::MD5>
md5.update "ab"
md5 << "c"                           # alias for #update
md5.hexdigest                        # => "90015098..."

# Use the same object to compute another digest
md5.reset
md5 << "message"
md5.hexdigest                        # => "78e73102..."
