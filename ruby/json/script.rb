require 'json'

# スクリプトのディレクトリを取得
script_dir = File.expand_path(File.dirname(__FILE__))
json_path = File.expand_path('data.json', script_dir)

# jsonファイルを読み込む
data = JSON.parse(File.read(json_path))
ages = data.map { |student| student['age'] }
scores = data.map { |student| student['score'] }
average_age = ages.sum / ages.size.to_f
average_score = scores.sum / scores.size.to_f
high_scores_count = scores.count { |score| score >= 80 }

puts average_age
puts average_score
puts high_scores_count

